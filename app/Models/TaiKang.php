<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\TaiKang
 *
 * @property int $id
 * @property string $age 年龄区间
 * @property int $month_amount 月付价格
 * @property int $year_amount 年付价格
 * @property int $sex 性别 1-女 2-男
 * @property int $insurance_type 保额类型 1-(10+3)  2-(20+6) 3-(50+15)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TaiKang whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TaiKang whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TaiKang whereInsuranceType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TaiKang whereMonthAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TaiKang whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TaiKang whereYearAmount($value)
 * @mixin \Eloquent
 */
class TaiKang extends Model
{
    //
    protected $table = 'taikang_premium';
}
