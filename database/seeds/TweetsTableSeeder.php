<?php

use Illuminate\Database\Seeder;

class TweetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return Twitter::getUserTimeline(['screen_name' => '', 'count' => 20, 'format' => 'array']);
    }
}
