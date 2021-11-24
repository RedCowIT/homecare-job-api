<?php

namespace Modules\Plan\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Plan\Services\Interfaces\AppliancePlanService;

class AppliancePlanController
{
    public function calculate(Request $request, AppliancePlanService $service)
    {
        return new JsonResource($service->calculate($request->all()));
    }
}
