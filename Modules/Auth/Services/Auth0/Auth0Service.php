<?php

namespace Modules\Auth\Services\Auth0;

use Auth0\SDK\API\Authentication;
use Auth0\SDK\API\Management;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Support\Arr;

class Auth0Service
{
    private $authDomain;
    private $connection;
    private $_managementApi;

    public function __construct()
    {
        $this->authDomain = env('AUTH0_MANAGEMENT_DOMAIN');
        $this->connection = env('AUTH0_MANAGEMENT_USER_CONNECTION');
    }

    public function getUserByAuth0Id($id)
    {
        $api = $this->managementApi();

        $user = $this->managementApi()->users()->get($id);

        return $user;
    }

    public function getUserByEmail($email)
    {
        $users = $this->managementApi()->users()->getAll(['q' => 'email:' . $email]);

        if (count($users) == 1) {
            return $users[0];
        }

        return null;
    }

    public function createUser(array $inputData)
    {
        $data = [
            'email' => $inputData['email'],
            'password' => $inputData['password'],
            'connection' => $this->connection
        ];

        if (Arr::has($inputData, 'first_name')) {
            $data['given_name'] = $inputData['first_name'];
        }

        if (Arr::has($inputData, 'last_name')) {
            $data['family_name'] = $inputData['last_name'];
        }

        $api = $this->managementApi();

        $user = $this->getUserByEmail($data['email']);

        try {

            if (!$user) {
                $user = $api->users()->create($data);
            } else {
                // Don't update an existing user's email/password if we're only adding
                $user = $this->updateUser($user['user_id'], Arr::except($data, ['email', 'password']));
            }

            return $user;

        } catch (RequestException $e) {

            if ($this->isPasswordStrengthException($e)) {
                throw ValidationException::withMessages([
                    'password' => 'Password is too weak, it must be at least 8 characters and contain at least 1 number and 1 uppercase character.'
                ]);
            }

            throw $e;

        }
    }

    public function updateUser($authId, $data)
    {
        $api = $this->managementApi();

        logger()->debug('Auth0Service updateUser', ['auth0 id' => $authId]);

        return $api->users()->update($authId, $data);
    }

    private function getManagementAccessToken()
    {
        $domain = env('AUTH0_MANAGEMENT_DOMAIN');
        $clientId = env('AUTH0_MANAGEMENT_CLIENT_ID');
        $clientSecret = env('AUTH0_MANAGEMENT_CLIENT_SECRET');
        $audience = env('AUTH0_MANAGEMENT_API_ID');

        $auth0 = new Authentication($domain, $clientId, $clientSecret, $audience);

        $result = $auth0->client_credentials([]);

        return $result;
    }

    /**
     * @return Management
     */
    private function managementApi()
    {

        if (!$this->_managementApi) {

            $token = $this->getManagementAccessToken();

            $this->_managementApi = new Management($token['access_token'], $this->authDomain);
        }

        return $this->_managementApi;

    }

    protected function isPasswordStrengthException($e)
    {
        if ($e instanceof RequestException) {
            if ($e->getCode() === 400) {
                if ($e->getMessage() && Str::contains($e->getMessage(), 'weak')) {
                    return true;
                }
            }
        }
        return false;

    }
}
