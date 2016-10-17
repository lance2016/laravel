@extends("common.layout")

@section("style")
    <link rel="stylesheet" href="{{asset("static/css/style.css")}}">
    @stop
@section("content")
    @include("common.validator")
    <!--自定义内容区域-->
    <div class="panel panel-default">
        <div class="panel-heading">新增学生</div>
        <div class="panel-body">
            {{--action="{{url("demo/save")}}"--}}
            <form class="form-horizontal" method="post" action="">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">姓名</label>
                    <div class="col-sm-5">
                        <input type="text"  name="Student[name]"    value="{{old('Student')['name']}}" class="form-control" id="name" placeholder="请输入学生姓名">
                    </div>

                    <div class="col-sm-5">
                        <label class="form-control-static text-danger">{{$errors->first('Student.name')}}</label>
                    </div>


                    <label for="age" class="col-sm-2 control-label">年龄</label>
                    <div class="col-sm-5">
                        <input type="text"  name="Student[age]"  value="{{old('Student')['age']}}"  class="form-control" id="age" placeholder="请输入年龄">
                    </div>

                    <div class="col-sm-5">
                        <p class="form-control-static text-danger">{{$errors->first('Student.age')}}</label>
                    </div>


                    <label for="name" class="col-sm-2 control-label">性别</label>
                    <div class="col-sm-5">
                        <label class="radio-inline">
                            <input type="radio"  name="Student[sex]"  value="1" >男
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="Student[sex]"  value="2" >女
                        </label>
                        <label class="radio-inline">
                            <input type="radio"name="Student[sex]"  value="0" >未知
                        </label>
                    </div>

                    <div class="col-sm-5">
                        <label class="form-control-static text-danger">{{$errors->first('Student.sex')}}</label>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-info" >提交</button>
                        </div>
                    </div>
                </div>
            </form>


        </div>

    </div>
    @stop
