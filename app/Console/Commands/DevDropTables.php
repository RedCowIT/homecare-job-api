<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Console\ConfirmableTrait;
use Illuminate\Support\Facades\DB;

class DevDropTables extends Command
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
    protected $signature = 'dev:droptables {--force : Force the operation to run in production environment.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Drop all tables in current DB (migration table too)';

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

        // Get an array of all table names in project database
        $tables = DB::select('SHOW TABLES');

        if (empty($tables)) {
            $this->comment(PHP_EOL . "$this->db DB has no tables");
        } else {
            $colname = 'Tables_in_' . $this->db;

            $this->comment('Dropping all tables.');

            DB::beginTransaction();

            // Remove foreign key checking
            DB::statement('SET FOREIGN_KEY_CHECKS = 0');

            foreach ($tables as $table) {
                // Log action to terminal
                $this->comment("Dropping {$table->$colname} table");

                // Drop the table
                DB::unprepared("DROP TABLE {$table->$colname}");
            }

            // Reset foreign key checks back to 1
            DB::statement('SET FOREIGN_KEY_CHECKS = 1');

            // Commit changes into database
            DB::commit();

            // Prints empty line, same as echo("\n")
            echo(PHP_EOL);
        }
    }
}
