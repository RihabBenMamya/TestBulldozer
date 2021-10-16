<?php

namespace App\Console\Commands;

use App\Link;
use Carbon\Carbon;
use Illuminate\Console\Command;

class TruncateOldLinks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'links:truncate';
 
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        Link::whereDate('created_at', '<=', now()->subDays(1)->setTime(0, 0, 0)->toDateTimeString())->delete();
        
    }
}
