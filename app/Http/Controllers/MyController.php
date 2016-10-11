<?php

namespace App\Http\Controllers;

use App\My;

class MyController extends Controller
{
   public function info($name="无名氏"){
       //return "my name is ".$name;
       //return route("myinfo");
       $my=new My;
       return view("My/my-view",[
           "name"=>My::getMyName(),//静态函数
           "age"=>$my->getAge()//非静态函数
       ]);

   }
}
