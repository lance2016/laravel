@extends("common.layout")

@section("style")
    <link rel="stylesheet" href="{{asset("static/css/style.css")}}">
    @stop
@section("content")

    @include("common.message")
    <div class="panel panel-default">
        <div class="panel-heading">学生列表</div>
        <table class="table table-striped table-hover table-responsive text-center">
            <thead>
            <tr >
                <th >ID</th>
                <th>姓名</th>
                <th>年龄</th>
                <th>性别</th>
                <th >添加时间</th>
                {{--<th>更新时间</th>--}}
                <th width="120">操作</th>
            </tr>
            </thead>
            @foreach($students as $student)
            <tr>
                <th scope="row">{{$student->id}}</th>
                <td>{{$student->name}}</td>
                <td>{{$student->age}}</td>
                <td>{{$student->sex}}</td>
                <td>{{date("Y-m-d H:i:s",$student->created_at)}}</td>
                {{--<td>{{date("Y-m-d H:i:s",$student->updated_at)}}</td>--}}
                <td>
                    <a href="">详情</a>
                    <a href="">修改</a>
                    <a href="">删除</a>
                </td>
            </tr>
            @endforeach
            </thead>
        </table>
    </div>

    <!--分页-->
    <div>
        <div class="pull-right">
            {{$students->render()}}
        </div>

    </div>




@stop

