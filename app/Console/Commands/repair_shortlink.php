<?php

namespace App\Console\Commands;

use App\Http\Controllers\NewsController;
use Illuminate\Console\Command;

class repair_shortlink extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'news:repairshortlink';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command repair shortlink news';

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
     * @return int
     */
    public function handle()
    {
        $newsController=new NewsController();
        $newsController->repair_shortlink();
    }
}
