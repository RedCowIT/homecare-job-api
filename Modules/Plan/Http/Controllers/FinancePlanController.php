<?php

namespace Modules\Plan\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Plan\Services\Interfaces\FinancePlanService;

class FinancePlanController
{
    public function calculate(Request $request, FinancePlanService $service)
    {
        return new JsonResource($service->calculate($request->all()));
    }
}
