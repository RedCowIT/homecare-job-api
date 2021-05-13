<?php

namespace Modules\Core\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Support\BindsServices;

abstract class BindingsServiceProvider extends ServiceProvider
{
    use BindsServices;

    public function boot(){
        $this->bindModuleServices();
    }

    /**
     * Override in Module instance
     */
    protected function getServices()
    {
        return null;
    }

    protected function bindModuleServices()
    {
        $services = $this->getServices();

        if ($services){
            $this->bindServices($services);
        }
    }
}
