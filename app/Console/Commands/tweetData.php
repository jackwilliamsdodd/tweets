<?php

namespace App\Console\Commands;

use App\Tweet;
use Illuminate\Console\Command;
use Thujohn\Twitter\Facades\Twitter;
use Carbon\Carbon;

class tweetData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:tweets';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add the latest tweets to the database';

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
        $data = Twitter::getUserTimeline(['screen_name' => '', 'count' => '100', 'format' => 'json', 'tweet_mode' => 'extended']);
        $tweets = json_decode($data);

        foreach ($tweets as $tweet) {


            $tweetid = $tweet->{'id'};
            $screename = $tweet->{'user'}->{'screen_name'};
            $createdat = $tweet->{'created_at'};
            $text = $tweet->{'full_text'};
            $username = $tweet->{'user'}->{'name'};


            $txt = htmlspecialchars_decode($text);
            $date = new Carbon($createdat);
            $dt = $date->toDayDateTimeString();

            Tweet::updateOrCreate([
                'tweet_id' => $tweetid,
                'screenname' => $screename,
                'createdat' => $dt,
                'text' => $txt,
                'username' => $username,
            ]);
        }
            echo "Tweets updated successfully!" . "\n";


    }
}
