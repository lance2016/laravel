<?php
/**
 * Created by PhpStorm.
 * User: lance
 * Date: 2016/10/13
 * Time: 11:58
 */
namespace App;
use Illuminate\Database\Eloquent\Model;
Class Student extends Model{
//指定表名
    protected $table= "student";
//指定主键
    protected $primaryKey="id";
}