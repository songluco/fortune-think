<?php

namespace App\Console\Commands\SongluArray;

use Illuminate\Console\Command;

/**
 * Class array_keys
 *
 * @package App\Console\Commands\SongluArray
 */
class array_keys extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:array_keys';

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

        //返回所有的键名
        $data_one = array_keys($students);
        $data_two = array_keys($stars);

        //返回某个值的键名
        $data_three = array_keys($stars, '杨幂');

        $array = array("color" => array('blue' => "blue", "red", "green"),
            "size"  => array("small", "medium", "large"));
        print_r(array_keys($array));


    }

}
