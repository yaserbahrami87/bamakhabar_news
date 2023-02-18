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
        $feed =\Feeds::make('https://jamejamonline.ir/fa/rss/17',true);
        $data = array(
            'title'     => $feed->get_title(),
            'permalink' => $feed->get_permalink(),
            'items'     => $feed->get_items(),
        );
        foreach ($data['items'] as $datum) {
            $news=news::where('title','=',$datum->get_title())
                ->get();
            if($news->count()==0)
            {
                news::create([
                    'title'         =>$datum->get_title(),
                    'shortlink'     =>$datum->get_title(),
                    'link_source'   =>$datum->get_permalink(),
                    'img_thumbnail' =>$datum->get_enclosures()[0]->link,
                ]);
            }

        }
    }
}
