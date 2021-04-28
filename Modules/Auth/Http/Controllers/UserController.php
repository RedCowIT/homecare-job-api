<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Auth\Services\Interfaces\UserService;

class UserController extends Controller
{
    public function authenticatedUser(UserService $userService)
    {
        logger()->info('Userservice', [$userService]);

        $user = Auth::user();

        return [
            'data' => $user
        ];
    }
}
