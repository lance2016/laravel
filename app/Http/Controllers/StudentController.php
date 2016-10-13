<?php
/**
 * Created by PhpStorm.
 * User: lance
 * Date: 2016/10/12
 * Time: 15:45
 */
namespace App\Http\Controllers;
use App\Student;
use Illuminate\Support\Facades\DB;

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

}