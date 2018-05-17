<?php

namespace App\Console\Commands\SongluArray;

use Illuminate\Console\Command;

class array_values extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:array_values';

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
     * @return mixed
     */
    public function handle()
    {
        $students = [
            '张三',
            '李四',
            '王五',
        ];

        $stars = [
            'zhengkai' => '郑凯',
            'yangmi' => '杨幂',
            'liyifei' => '刘亦非',
            'yangxiaolu' => '杨晓璐',
        ];

        dd(array_values($students), array_values($stars));
    }
}
