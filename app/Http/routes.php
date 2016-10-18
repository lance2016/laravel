<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('welcome');
});

//关联控制器
//Route::get("info","MyController@info");

//Route::get("info",["uses"=>"MyController@info"]);
//Route::any("info",["uses"=>"MyController@info"]);
/*Route::any("info",[
    "uses"=>"MyController@info",
    "as"=>"myinfo"
]);
*/
Route::get("info/{name?}",["uses"=>"MyController@info"]);


//数据库操作路由
Route::get("test1",["uses"=>"StudentController@test1"]);

Route::get("insert1",["uses"=>"StudentController@insert1"]);
Route::get("update1",["uses"=>"StudentController@update1"]);
Route::get("delete1",["uses"=>"StudentController@delete1"]);
Route::get("select1",["uses"=>"StudentController@select1"]);
Route::get("query1",["uses"=>"StudentController@query1"]);
Route::get("juhe",["uses"=>"StudentController@juhe"]);

//视图
Route::get("section1",["uses"=>"StudentController@section1"]);
//orm
Route::get("orm1",["uses"=>"StudentController@orm1"]);
Route::get("orm2",["uses"=>"StudentController@orm2"]);
Route::get("orm3",["uses"=>"StudentController@orm3"]);
Route::get("orm4",["uses"=>"StudentController@orm4"]);

//url
Route::get("url",["as"=>"url","uses"=>"StudentController@urlTest"]);


//request
Route::get("request1",["uses"=>"StudentController@request1"]);

//session

Route::group(['middleware'=>['web']],function(){
    Route::get("session1",["uses"=>"StudentController@session1"]);
    Route::get("session2",[
        "as"=>"s1",
        "uses"=>"StudentController@session2"]);
    Route::get("response1",["uses"=>"StudentController@response1"]);
});

//response

//Middleware
//宣传页面
Route::get("activity1", ["uses" => "StudentController@activity1"]);
Route::group(['middleware'=>['activity']],function() {
//活动页面
    Route::get("activity2", ["uses" => "StudentController@activity2"]);
    Route::get("activity3", ["uses" => "StudentController@activity3"]);
});

//demo路由
Route::group(['middleware' => ['web']], function () {
    //demo路由
    Route::any("demo/index", ["uses" => "DemoController@index"]);
    Route::any("demo/create",["uses"=>"DemoController@create"]);
    Route::any("demo/save",["uses"=>"DemoController@save"]);
    Route::any("demo/update/{id}",["uses"=>"DemoController@update"]);
    Route::any("demo/detail/{id}",["uses"=>"DemoController@detail"]);
    Route::any("demo/delete/{id}",["uses"=>"DemoController@delete"]);
});


//基础路由
/*
Route::get('basic1',function(){

    return "<h1>hello world</h1>";
});

Route::post("basic2",function (){
   return "<h3>this is post method</h3>";
});
*/
//多请求路由
/*
Route::match(['get','post'],"multy1",function (){
    return "<h2>it can receive post and get</h2>";
});

Route::any("multy2",function (){
   return "<h1>this is any</h1>";
});
*/
//路由参数
/*
Route::get("user/{id}",function ($id){
    return "User-id:".$id;
});
*/
/*Route::get("user/{name?}",function ($name="name"){
    return "User-name:".$name;
});
*/

/*
Route::get("username/{name?}",function ($name="Lance"){
    return "User-name:".$name;
})->where("name",'[a-zA-Z]+');
*/
/*
Route::get("username/{id}/{name?}",function ($id,$name="Lance"){
    return "User-id:".$id."  User-name:".$name;
})->where(["id"=>'[0-9]+',"name"=>'[a-zA-Z]+']);
*/
//路由别名
/*
Route::get("part/partcenter",['as'=>"center",function (){
   return route('partcenter');
}]);*/
//群组路由
/*
Route::group(['prefix' => 'member'], function () {
    Route::get("user/{name?}",function ($name="Anna"){
        return "User-name:".$name;
    });

    Route::get("username/{id}/{name?}",function ($id,$name="Lance"){
        return "User-id:".$id."  User-name:".$name;
    })->where(["id"=>'[0-9]+',"name"=>'[a-zA-Z]+']);
});
*/

//路由输出视图
/*
Route::get('view', function () {
    return view('route-view');
});
*/
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/



Route::group(['middleware' => ['web']], function () {

});
