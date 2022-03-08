<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PullTranscripts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:pullTranscripts';

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
     * @param \App\Services\TranscriptionService $transcriptionService
     * @return int
     */
    public function handle(\App\Services\TranscriptionService $transcriptionService)
    {
        $transcriptionService->getTranscripts();
        return 0;
    }
}

