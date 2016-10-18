<?php
/**
 * Created by PhpStorm.
 * User: lance
 * Date: 2016/10/13
 * Time: 11:58
 */
namespace App;
use Illuminate\Database\Eloquent\Model;
Class Demo extends Model{
    const SEX_UN=0;
    const SEX_BOY=1;
    const SEX_GIRL=2;
//指定表名
    protected $table= "student";
//指定主键
    protected $primaryKey="id";
//维护时间戳
    public $timestamps=true;
//指定允许批量赋值的字段
    protected $fillable=["name","age","sex"];
//    指定不允许批量赋值的字段
    protected $guarded=[];

    public function getDateFormat()
    {
        return time();
    }
    public function asDateTime($value)
    {
        return $value; // TODO: Change the autogenerated stub
    }


    public function sex($kind=null){

        $arr=[
            self::SEX_UN=>"未知",
            self::SEX_BOY=>"男",
            self::SEX_GIRL=>"女"
        ];

        if($kind!=null){
            return (array_key_exists($kind,$arr))?$arr[$kind]:$arr[self::SEX_UN];
        }
        else return $arr;

    }
}