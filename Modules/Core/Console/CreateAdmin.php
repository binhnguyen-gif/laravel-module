<?php

namespace Modules\Core\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Modules\Core\Entities\Admin;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'hozitech:generate-admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create admin.';

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
        $info = [
            'is_admin' => true,
            'name'     => $this->ask('Your Name'),
            'email'    => $this->ask('Your Email'),
            'password' => Hash::make($this->ask('Your Password')),
        ];
        Admin::create($info);
        $this->info('Create account success');
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['name', 'N', InputOption::VALUE_OPTIONAL, 'Your Name'],
            ['email', 'E', InputOption::VALUE_OPTIONAL, 'Your Email'],
            ['password', 'P', InputOption::VALUE_OPTIONAL, 'Password'],
        ];
    }
}
