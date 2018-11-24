<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class XencolorInstall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Xen:install {--force : Do not ask for User confirmation}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install dummy Data for Xencolor Ecommerce App';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {


        if ($this->option('force')) {
            $this->proceed();

        } else {
            if ($this->confirm('This will delete All current data and install the default dummy data. Are you sure?')) {
                $this->proceed();

            }
        }
    }

    protected function proceed() {
        if ($this->confirm('This will delete All current data and install the default dummy data. Are you sure?')) {

            File::deleteDirectory(public_path('storage/products/dummy'));
            $this->callSilent('storage:link');
            $copySuccess = File::copyDirectory(public_path('storage/products'), public_path('storage/products/dummy'));

            if ($copySuccess) {
                $this->info('Images successfully copied to storage folder');
            }

        }



        $this->call('migrate:fresh', [
            '--seed' => true,
        ]);


        $this->call('db:seed', [
            '--class' => 'VoyagerDatabaseSeeder',
        ]);
        $this->call('db:seed', [
            '--class' => 'VoyagerDummyDatabaseSeeder',
        ]);

        $this->call('db:seed', [
            '--class' => 'CustomDataTypesTableSeeder',
        ]);
        $this->call('db:seed', [
            '--class' => 'CustomDataRowsTableSeeder',
        ]);
        $this->call('db:seed', [
            '--class' => 'CustomMenusTableSeeder',
        ]);
        $this->call('db:seed', [
            '--class' => 'CustomMenuItemsTableSeeder',
        ]);
        $this->call('db:seed', [
            '--class' => 'CustomRolesTableSeeder',
        ]);
        $this->call('db:seed', [
            '--class' => 'CustomPermissionsTableSeeder',
        ]);

        $this->call('db:seed', [
            '--class' => 'CustomPermissionRoleTableSeeder',
        ]);
        $this->call('db:seed', [
            '--class' => 'CustomUsersTableSeeder',
        ]);

        $this->call('db:seed', [
            '--class' => 'CustomSettingsTableSeeder',
        ]);




        $this->info('XenColor Dummy Data has been Installed');

    }
        
}
