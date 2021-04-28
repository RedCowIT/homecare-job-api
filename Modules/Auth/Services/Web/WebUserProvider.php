<?php

namespace Modules\Auth\Services\Web;

use App\Support\Models;
use Auth0\Login\Auth0JWTUser;
use Auth0\Login\Auth0User;
use Auth0\Login\Repository\Auth0UserRepository;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\UserProvider;
use Modules\Account\Models\User;
use Modules\Account\Models\UserProfile;
use Modules\Auth\Services\Interfaces\UserService;

class WebUserProvider implements UserProvider
{
    private UserService $userService;
    /**
     * WebUserProvider constructor.
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function retrieveById($identifier)
    {
        dump('retrieveById', $identifier);
        // return User::find($identifier);
    }

    public function retrieveByToken($identifier, $token)
    {
        dd('retrieveByToken: ' . $identifier . ' - ' . $token);
    }

    public function updateRememberToken(Authenticatable $user, $token)
    {
        // TODO: Implement updateRememberToken() method.
    }

    public function retrieveByCredentials(array $credentials)
    {
        dd('retrieveByCredentials');
        // $token = $credentials['api_token'];
        //return User::where('auth_id', $token)->get()->first();
    }

    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        dd('validateCredentials', $user, $credentials);
    }
}
