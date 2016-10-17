<?php
namespace App\Http\Controllers;

use App\Demo;
use Illuminate\Http\Request;

class DemoController extends Controller {
    public function index(){
//        simplePaginate($perPage = null, $columns = ['*'], $pageName = 'page')
//其中 $perPage 表示每页显示数目， $columns 表示查询字段， $pageName 表示页码名称，页码名称默认为 page 。
//        $students=Demo::paginate(10);
//        查询构造器实现分页
        $students=Demo::where("id",">","0")
            ->orderBy("id","asc")
            ->paginate(5);
        return view("demo.index", [
            "students"=>$students
        ]);
    }

    public function create(Request $request){
        if($request->isMethod("POST")) {
//            控制器验证
//            $this->validate($request,[
//                "Student.name"=>"required|max:20",
//                "Student.age"=>"integer|required",
//                "Student.sex"=>"required"
//            ],[
//                "required"=>":attribute 为必填项",
//                "max"=>":attribute 长度不符合要求",
//                "integer"=>":attribute 必须为整数"
//            ],[
//                "Student.name"=>"姓名",
//                "Student.age"=>"年龄",
//                "Student.sex"=>"性别"
//            ]);

//          validator类验证
           $validator=\Validator::make($request->input(),[
                "Student.name"=>"required|max:20",
                "Student.age"=>"integer|required",
                "Student.sex"=>"required"
            ],[
                "required"=>":attribute 为必填项",
                "max"=>":attribute 长度不符合要求",
                "integer"=>":attribute 必须为整数"
            ],[
                "Student.name"=>"姓名",
                "Student.age"=>"年龄",
                "Student.sex"=>"性别"
            ]);
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }
        $data=$request->input("Student");

            if( Demo::create($data)){
                    return redirect("demo/index")->with("success","添加成功");
                }
                else
                    return redirect()->back();
        }

        return view("demo.create");
    }
//    保存添加
    public function save(Request $request){
            $data=$request->input("Student");
//            dd($data);
        $student=new Demo();
        $student->name=$data['name'];
        $student->age=$data['age'];
        $student->sex=$data['sex'];
        if($student->save()){
            return redirect("demo/index");
        }
        else
            redirect()->back();
    }


}
