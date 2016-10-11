<?php
/**
 * Created by PhpStorm.
 * User: lance
 * Date: 2016/10/11
 * Time: 12:25
 */
namespace App;
use Illuminate\Database\Eloquent\Model;

class My extends Model {
   public static function getMyName(){
       return "Lavarel";
   }

   public function getAge(){
       return 13;
   }
}