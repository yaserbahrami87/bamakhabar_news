<?php

namespace App\Console\Commands;

use App\news;
use Illuminate\Console\Command;
use Hekmatinasser\Verta\Verta;


class deleteNews extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command Users Delete description';

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
//        news::where('status','=',1)->delete();
        news::create([
            'title'         =>verta()->formatJalaliDate(),
            'shortlink'     =>verta(),
            'category_id'   =>1,
            'source_id'     =>1,
        ]);
    }
}
