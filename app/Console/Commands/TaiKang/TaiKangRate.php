<?php

namespace App\Console\Commands\TaiKang;

use App\Models\TaiKang;
use Illuminate\Console\Command;

class TaiKangRate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:TaiKangRate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '泰康保险费率表信息生成';

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
        //获取所有的年龄段信息
        $ages = TaiKang::whereInsuranceType(1)->whereSex(1)->pluck('age')->toArray();

        $woman = [];
        $man = [];
        foreach ($ages as $age) {
            //获取所有数据
            $models = TaiKang::whereAge($age)->get();
            foreach ($models as $model) {
                $detail = [
                    'insurance_type' => $model->insurance_type,
                    'month_amount' => $model->month_amount,
                    'pay_amount' => $model->year_amount,
                ];
                if($model->sex == 1){
                    $woman[$age][] = $detail;
                }else{
                    $man[$age][] = $detail;
                }
            }
        }
        $data = [
          'woman' => $woman,
          'man' => $man
        ];

        dd($data);

        return $data;
    }
}
