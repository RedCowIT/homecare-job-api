<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Console\ConfirmableTrait;

class DevReset extends Command
{
    use ConfirmableTrait;

    /**
     * Current database name (from env)
     *
     * @var string
     */
    protected $db;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dev:reset {--force : Force the operation to run in production environment.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset all migrations to clean install';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->db = env('DB_DATABASE');

        parent::__construct();
    }

    public function handle()
    {
        // If in production environment, confirm before proceeding
        if (!$this->confirmToProceed()) {
            // or you will be back at the prompt line
            return;
        }

        \Artisan::call('dev:droptables', ['--force' => true]);

        \Artisan::call('migrate', ['--step' => true]);

        $this->info('Migrations reset');

        echo(PHP_EOL);
    }
}
