<?php

namespace Modules\Core\Support;

trait BindsServices
{
    /**
     * Convenience function to conditionally bind mock and app services based on env.MOCK_DATA
     *
     * @param array $binds
     */
    public function bindServices(array $binds)
    {
        $useMocks = env('MOCK_DATA', false);

        foreach ($binds as $interface => $implementations) {
            if ($useMocks) {
                $this->bindService($interface, $implementations['mock']);
            } else {
                $this->bindService($interface, $implementations['api']);
            }
        }
    }

    /**
     * Bind service to an interface
     *
     * @param $interface
     * @param $implementation
     */
    public function bindService($interface, $implementation)
    {
        $this->app->bind($interface, function ($app) use ($implementation) {
            if (is_string($implementation)){
                return new $implementation;
            }

            Assert::true(is_object($implementation), 'Bound service is not a string or object');

            return $implementation;
        });
    }
}
