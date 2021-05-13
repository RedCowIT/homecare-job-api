<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Console\ConfirmableTrait;
use Illuminate\Support\Facades\Storage;

class DevFlush extends Command
{
    use ConfirmableTrait;


    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dev:flush {--force : Force the operation to run in production environment.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Flushes Telescope Entries';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // If in production environment, confirm before proceeding
        if (!$this->confirmToProceed()) {
            // or you will be back at the prompt line
            return;
        }

        $this->info('Flushing the toilet for local development.');

        $this->deleteLog();

        \Artisan::call('telescope:prune', ['--hours' => 0]);

        $this->info('Consider the toilet flushed, now wash your hands and get stuck in!');

        echo(PHP_EOL);
    }

    private function deleteLog()
    {
        $filename = storage_path('logs/laravel.log');

        if (is_file($filename)){
            unlink($filename);
        }
    }
}
