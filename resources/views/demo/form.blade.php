<form class="form-horizontal" method="post" action="">
    {{csrf_field()}}
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">姓名</label>
        <div class="col-sm-5">
            <input type="text"  name="Student[name]"    value="{{(old('Student')['name'])?old('Student')['name']:$student->name}}" class="form-control" id="name" placeholder="请输入学生姓名">
        </div>

        <div class="col-sm-5">
            <label class="form-control-static text-danger">{{$errors->first('Student.name')}}</label>
        </div>


        <label for="age" class="col-sm-2 control-label">年龄</label>
        <div class="col-sm-5">
            <input type="text"  name="Student[age]"  value="{{(old('Student')['age'])?old('Student')['age']:$student->age}}"  class="form-control" id="age" placeholder="请输入年龄">
        </div>

        <div class="col-sm-5">
            <label class="form-control-static text-danger">{{$errors->first('Student.age')}}</label>
        </div>


        <label for="name" class="col-sm-2 control-label">性别</label>
        <div class="col-sm-5">
            @foreach($student->sex() as $kind=>$val)
                <label class="radio-inline">
                    <input type="radio"  name="Student[sex]" value="{{$kind}}" {{isset($student->sex)&&$student->sex==$kind?'checked':''}} >{{$val}}
                </label>
            @endforeach
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