<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class echoWords extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'echoWords {string}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show words in console';

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
        //
	    $this->line($this->argument('string'));
    }
}
