<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (App::environment('local')) {
            $this->adjustServerTime();
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Add time to server for jwt-auth leeway race condition fix
     */
    private function adjustServerTime()
    {
        $time = 10;

        if ($time > 0){
            logger()->info(sprintf('Putting server time forward %d seconds', $time));

            $knownDate = Carbon::now()->addSeconds($time);

            Carbon::setTestNow($knownDate);
        }
    }
}
