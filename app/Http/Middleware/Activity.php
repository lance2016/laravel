<?php
/**
 * Created by PhpStorm.
 * User: lance
 * Date: 2016/10/15
 * Time: 14:14
 */
namespace App\Http\Middleware;
use Closure;

class Activity
{
    //前置操作
//    public function handle($request, Closure $next)
//    {
//        if (time() < strtotime("2016-11-14")) {
//            return redirect("activity1");
//        }
//        return $next($request);
//    }

    public function handle($request, Closure $next)
    {

        $response=$next($request);
        var_dump($response);
        echo "我是后置操作";
    }
}