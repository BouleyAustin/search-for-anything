<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RunRussell extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:runRussell';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the engagement score on a nightly basis';

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
     * @param \App\Services\RSSHelper $RSSHelper
     * @return int
     */
    public function handle(\App\Services\RSSHelper $RSSHelper)
    {
        $RSSHelper->createEpisodesFromRussellBruson('https://feeds.libsyn.com/400208/rss',21);
        return 0;
    }
}

