<?php

namespace Modules\Appointment\Services\Mock;

use Modules\Appointment\Entities\AppointmentVisit;
use Modules\Appointment\Services\Interfaces\AppointmentVisitService;
use Modules\Core\Services\MockEntityService;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class MockAppointmentVisitService extends MockEntityService implements AppointmentVisitService
{
    protected string $class = AppointmentVisit::class;

    protected array $data = [
        [
            "id" => 1, // same as appointmentId
            "customerComments" => null,
            "shampooComments" => null,
            "ovenComments" => null,
            "engineerRating" => null,
            "qIndependentCompany" => null,
            "qServiceCost" => null,
            "qWashFilters" => null,
            "qEfficiency" => null,
            "qParts" => null,
            "preInspectionSignatureJSON" => null,
            "signatureName" => null,
            "signatureJSON" => null
        ],
        [
            "id" => 2, // same as appointmentId
            "customerComments" => null,
            "shampooComments" => null,
            "ovenComments" => null,
            "engineerRating" => null,
            "qIndependentCompany" => null,
            "qServiceCost" => null,
            "qWashFilters" => null,
            "qEfficiency" => null,
            "qParts" => null,
            "preInspectionSignatureJSON" => null,
            "signatureName" => null,
            "signatureJSON" => null
        ]
    ];

    function find($id)
    {
        if ($id != 2){
            throw new NotFoundHttpException();
        }

        $attributes = $this->findAttributes($id);

        if (!$attributes){
            return null;
        }

        $class = $this->getClass();

        return new $class($attributes);
    }
}
