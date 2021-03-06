<?php
/**
 * Created by PhpStorm.
 * User: lance
 * Date: 2016/10/12
 * Time: 15:45
 */
namespace App\Http\Controllers;
use App\Student;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller {
    public function test1(){
     /*   查询
         $students=DB::select("select * from student");
        var_dump($students);
     */
     /*增加
      /$bool=DB::insert("insert into student(name,age) values(?,?)",
         ["Tom",2]);
       var_dump($bool);
     */
     /*更新
     $num=DB::update("update student set age=? where id=?",
         [200,2]);
        var_dump($num);
      */
        /*删除
         $row=DB::delete("delete from student where id=?",
            [6]);
        var_dump($row);
         */

    }


//使用查询构造器插入数据
    function insert1(){
//        $bool=DB::table('student')->insert(
//            ['name'=>"immoc","age"=>18]
//        );
//        var_dump($bool);


        //返回插入值对应id
//        $id=DB::table('student')->insertGetId(
//            ['name'=>"immoc","age"=>18]
//        );
//        var_dump($id);


//        $bool=DB::table('student')->insert([
//                ['name'=>"immoc1","age"=>18],
//                ['name'=>"immoc2","age"=>18],
//                ['name'=>"immoc3","age"=>18]
//            ]
//
//        );
//        var_dump($bool);
   }



//使用查询构造器更新数据
   function update1(){
//        $num=DB::table('student')
//            ->where('id',12)
//            ->update(['age'=>30,'sex'=>1]);
//        var_dump($num);

        //自增自减
//        $num1=DB::table('student')
//            ->where ("age",">",3)
//            ->decrement("age",3,['name'=>"immoc"]);
      //  $num2=DB::table('student')->increment("sex");
      //  var_dump($num1);
   }




    //使用查询构造器删除数据
    function delete1(){
//       $num= DB::table("student")
//            ->where("id",">","10")
//            ->delete();
//        var_dump($num);

        //全部清空
     //   DB::table("student")->truncate();
    }







    //使用查询构造器查询数据
    function select1(){
        //获取所有
       // $students=DB::table("student")->get();

        //获取结果集第一条
//        $students=DB::table("student")
//            ->orderBy("id","desc")
//            ->first();
//        where();
//        $students=DB::table("student")
//            ->where('id',">",'1')
//            ->get();


//        where();多条件
//        $students=DB::table("student")
//            ->whereRaw('id>? and age>=?',[3,3])
//            ->get();
//        dd($students);

//        pluck  指定字段
//        $names=DB::table("student")
//         ->pluck("name");

//        lists 指定字段，指定下标
//        $names=DB::table("student")
//         ->lists("name","id");//指定id作为下标
//        dd($names);

        //select 指定查找多个字段
//        $names=DB::table("student")
//             ->select("name","age")
//            ->get();


//        chunk   分段查询  一次查询指定个
//        $students=DB::table("student")->chunk(2,function ($studnts){
//           var_dump($studnts);
//            if(条件)
//                return false; 停止
//        });
//        $students=DB::table("student")
//            ->orderBy("id","desc")
//            //跳过第一条
//            ->skip(1)
//            //查询5条
//            ->take(5)->get();
//        dd($students);
    }

    //聚合函数
    function juhe(){
//        $num=DB::table("student")->count();
//        var_dump($num);

//        $max=DB::table("student")->max("id");
//        var_dump($max);

//        $min=DB::table("student")->min("id");
//        var_dump($min);

//        $avg=DB::table("student")->avg("age");
//        var_dump($avg);

        $sum=DB::table("student")->sum("age");
        var_dump($sum);
    }





    function orm1(){
//        使用模型查询数据
        //all();
//        $students=Student::all();
//        dd($students);

//        find()
//        $studnet=Student::find(3);
//        dd($studnet);


//        findOrFail()
//        $studnet=Student::findOrFail(1);
//        dd($studnet);

//        get()
//        $studnet=Student::get();
//       dd($studnet);

//        fitst()
//        $studnet=Student::where("age",">=","3")
//            ->orderBy("id","desc")
//            ->first();
//        dd($studnet);

//        chunk()
//        Student::chunk(2,function ($students){
//            dd($students);
//        });

        //聚合函数
//        $num=Student::count();
//        echo $num."<br/>";
//        $max=Student::where("id",">","3")->max("age");
//        echo $max."<br/>";
//        $min=Student::where("id",">","3")->min("age");
//        echo $min."<br/>";
    }

    function orm2(){
//        使用模型新增数据
//            $student=new Student();
//        $student->name="tom";
//        $student->sex=2;
//        $bool=$student->save();
//        控制时间戳
//        $student=Student::find(51);
//        echo date("Y-m-d H:i:s",$student->created_at);

//        使用模型的create新增数据
//       $student= Student::create(
//            ["name"=>"jerry"]
//        );
//        dd($student);

//        $student=Student::firstOrCreate(
//            ["id"=>123]
//        );
//        $student=Student::firstOrNew(
//            ["age"=>123]
//        );
//        $bool=$student->save();
//        dd($bool);

    }

    function orm3(){
//        模型更新数据
//        $student=Student::find(3);
//        $student->name="Lucy";
//        $bool=$student->save();
//        var_dump($bool);

//        $num=Student::where("id",">","10")->update(
//            ["age"=>41,"sex"=>1]);
//        var_dump($num);
    }

    function orm4(){
//        通过模型删除
//        $student=Student::find(3);
//        $bool=$student->delete();
//        var_dump($bool);

//        通过主键删除
//        $num=Student::destroy(21);
//        $num=Student::destroy(22,23);
//        $num=Student::destroy([53,54]);
//        var_dump($num);

//        删除指定条件
//        $num=Student::where("id","<=","50")->delete();
//        var_dump($num);
    }
    public function section1(){
        $students=Student::get();
        $name="Bob";
        $arr=["Anna","Bob"];
        return View("student/section1",[
            "name"=>$name,
            "arr"=>$arr,
            "students"=>$students
        ]);
    }


    public function urlTest(){
    return "urlTest";
}

    public function request1(Request $request)
    {
//取值
//        echo $request->input("name");
////        默认值
//        echo $request->input("sex","性别未知");
//        if($request->has("id")){
//            echo "id:".$request->input("id");
//        }
//        else
//            echo "没有id";
//
//        dd($request->all());
////判断请求类型
//        echo $request->method();
//        echo $request->isMethod("GET")?"is Get":"not get";
//
//        $res=$request->ajax();
//        var_dump($res);
////路由格式
//        echo $request->is("request1");
////当前url
//        echo $request->url();
    }

    public function session1(Request $request){
//        http request session
//        $request->session()->put("key1","value1");
//        dd($request->session()->get('key1'));

//        session()
//        session()->put("key2","value2");
//        echo session()->get("key2");

//        Session
//        Session::put("key3","value3");
//        echo Session::get("key3");

//        不存在就取默认值
//        echo Session::get("key4","default");

//        Session::put(["key4"=>"value4","key5"=>"value5"]);
//        echo Session::get("key5");

//        存放数组
//        Session::push("students","name1");
//        Session::push("students","name2");
//        取出所有
//        $res= Session::all();
//判断session是否存在
//        if(Session::has("key1"))
//            echo "有";
//        else
//            echo "没有";
        //    删除session
//Session::forget("key1");
//        删除所有session
//Session::flush();
//        暂存数据首次访问存在
//        Session::flash("key-flash","num");
    }



    public function session2(Request $request){
//
//
//
   return Session::get("message","暂无信息");
}


public function response1(){
//    响应json
//    $data=[
//        "id"=>"123",
//        "name"=>"Jerry",
//        "psw"=>"abc"
//    ];
//    return response()->json($data);

//    重定向
//    return redirect("session2");

//    return redirect("session2")->with(["message"=>"我是快闪数据"]);

//    return redirect()->action("StudentController@session2")->with(["message"=>"我是快闪数据"]);

//    return redirect()->route("s1")->with(["message"=>"我是快闪数据"]);

    return redirect()->back()->with(["message"=>"我是快闪数据"]);

}

    function activity1(){
        return "活动快要开始了，敬请期待";
    }

    function activity2(){
        return "活动已经开始了，欢迎踊跃参加";
    }

    function activity3(){
        return "活动已经结束了";
    }






}