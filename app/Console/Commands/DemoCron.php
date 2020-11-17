<?php

namespace App\Console\Commands;

use App\Events\UserEvent;
use App\User;
use Illuminate\Console\Command;

class DemoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'run event to listen to socket';

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
        \Log::info("Cron is working fine!");

        User::create([
            'name'=> 'jone',
            'email'=>'jone@email.com'    
        ]);

        $user = User::first();
        event(new UserEvent($user));
        \Log::info('Demo:Cron Cummand Run successfully!');
    }
}
