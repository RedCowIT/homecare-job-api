<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Auth\Services\Sanctum\SanctumService;

class SanctumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login(Request $request, SanctumService $sanctumService)
    {
        $token = $sanctumService->login(
            $request->input('username'),
            $request->input('password'),
            $request->input('device', $request->userAgent())
        );

        return new JsonResponse(['token' => $token]);
    }
}
