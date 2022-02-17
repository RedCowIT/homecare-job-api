<?php

namespace Modules\Auth\Services\Sanctum;

use Illuminate\Support\Facades\Http;
use Modules\Auth\Models\User;
use Modules\Core\Support\HandlesHttpResponses;

class SanctumService
{
    use HandlesHttpResponses;

    public function __construct()
    {

    }

    public function login($username, $password, $deviceName)
    {
        $url = sprintf('%s/%s', $this->getApiUrl(), 'auth');

        $response = $this->http()->post($url, [
            'username' => $username,
            'password' => $password
        ]);

        $this->logResponse($url, $response);

        $data = $this->processResponse($response);

        $userId = $data['id'];

        $user = User::find($userId);

        if (!$user) {
            logger()->info('Creating user for the first time', ['username' => $username, 'id' => $userId]);
            $user = $this->createUser($userId);
        }

        return $user->createToken($deviceName)->plainTextToken;
    }

    protected function http(): \Illuminate\Http\Client\PendingRequest
    {
        return Http::withHeaders([

        ])->timeout(env('WEB_API_TIMEOUT', 10));
    }

    protected function getApiUrl(): string
    {
        return rtrim(env('WEB_API_URL'), "/");
    }

    protected function createUser($userId): User
    {
        return User::create(['id' => $userId]);
    }
}
