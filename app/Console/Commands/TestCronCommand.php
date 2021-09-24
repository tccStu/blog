<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class TestCronCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cmd:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '在linux服务器上面 添加当时器任务  * * * * * php /path/to/artisan schedule:run 这样Kernel的command里面所有的定时任务都会按时执行';

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
	    Log::info("TestCronCommand action signature: ".$this->signature.'  desc: '.$this->description);
    }
}
