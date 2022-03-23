<?php

namespace Modules\Customer\Providers;

use Modules\Core\Providers\BindingsServiceProvider;
use Modules\Customer\Services\Interfaces\CustomerAddressService;
use Modules\Customer\Services\Interfaces\CustomerApplianceService;
use Modules\Customer\Services\Interfaces\CustomerApplianceTypeService;
use Modules\Customer\Services\Interfaces\CustomerPlanApplianceService;
use Modules\Customer\Services\Interfaces\CustomerPlanFinanceDocumentService;
use Modules\Customer\Services\Interfaces\CustomerPlanFinanceService;
use Modules\Customer\Services\Interfaces\CustomerPlanService;
use Modules\Customer\Services\Interfaces\CustomerService;
use Modules\Customer\Services\Interfaces\EmploymentStatusService;
use Modules\Customer\Services\Interfaces\EmploymentStatusTimeService;
use Modules\Customer\Services\Interfaces\ResidentialStatusService;
use Modules\Customer\Services\Interfaces\TitleService;
use Modules\Customer\Services\Mock\MockCustomerAddressService;
use Modules\Customer\Services\Mock\MockCustomerApplianceService;
use Modules\Customer\Services\Mock\MockCustomerApplianceTypeService;
use Modules\Customer\Services\Mock\MockCustomerPlanApplianceService;
use Modules\Customer\Services\Mock\MockCustomerPlanFinanceDocumentService;
use Modules\Customer\Services\Mock\MockCustomerPlanFinanceService;
use Modules\Customer\Services\Mock\MockCustomerPlanService;
use Modules\Customer\Services\Mock\MockCustomerService;
use Modules\Customer\Services\Mock\MockEmploymentStatusService;
use Modules\Customer\Services\Mock\MockEmploymentStatusTimeService;
use Modules\Customer\Services\Mock\MockResidentialStatusService;
use Modules\Customer\Services\Mock\MockTitleService;
use Modules\Customer\Services\Web\WebCustomerAddressService;
use Modules\Customer\Services\Web\WebCustomerApplianceService;
use Modules\Customer\Services\Web\WebCustomerApplianceTypeService;
use Modules\Customer\Services\Web\WebCustomerPlanApplianceService;
use Modules\Customer\Services\Web\WebCustomerPlanFinanceDocumentService;
use Modules\Customer\Services\Web\WebCustomerPlanFinanceService;
use Modules\Customer\Services\Web\WebCustomerPlanService;
use Modules\Customer\Services\Web\WebCustomerService;
use Modules\Customer\Services\Web\WebEmploymentStatusService;
use Modules\Customer\Services\Web\WebEmploymentStatusTimeService;
use Modules\Customer\Services\Web\WebResidentialStatusService;
use Modules\Customer\Services\Web\WebTitleService;

class CustomerBindingsProvider extends BindingsServiceProvider
{
    protected function getServices()
    {
        return [
            CustomerAddressService::class => [
                'mock' => MockCustomerAddressService::class,
                'api' => WebCustomerAddressService::class
            ],
            CustomerApplianceService::class => [
                'mock' => MockCustomerApplianceService::class,
                'api' => WebCustomerApplianceService::class
            ],
            CustomerApplianceTypeService::class => [
                'mock' => MockCustomerApplianceTypeService::class,
                'api' => WebCustomerApplianceTypeService::class
            ],
            CustomerService::class => [
                'mock' => MockCustomerService::class,
                'api' => WebCustomerService::class
            ],
            CustomerPlanService::class => [
                'mock' => MockCustomerPlanService::class,
                'api' => WebCustomerPlanService::class
            ],
            CustomerPlanApplianceService::class => [
                'mock' => MockCustomerPlanApplianceService::class,
                'api' => WebCustomerPlanApplianceService::class
            ],
            CustomerPlanFinanceService::class => [
                'mock' => MockCustomerPlanFinanceService::class,
                'api' => WebCustomerPlanFinanceService::class
            ],
            CustomerPlanFinanceDocumentService::class => [
                'mock' => MockCustomerPlanFinanceDocumentService::class,
                'api' => WebCustomerPlanFinanceDocumentService::class
            ],
            ResidentialStatusService::class => [
                'mock' => MockResidentialStatusService::class,
                'api' => WebResidentialStatusService::class
            ],
            TitleService::class => [
                'mock' => MockTitleService::class,
                'api' => WebTitleService::class
            ],
            EmploymentStatusService::class => [
                'mock' => MockEmploymentStatusService::class,
                'api' => WebEmploymentStatusService::class
            ],
            EmploymentStatusTimeService::class => [
                'mock' => MockEmploymentStatusTimeService::class,
                'api' => WebEmploymentStatusTimeService::class
            ]
        ];
    }
}
