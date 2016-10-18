@extends("common.layout")
@section("content")

<div class="panel panel-default">
    <div class="panel-heading">学生详情</div>
    <table class="table table-striped table-hover">
        <tbody>
        <tr>
            <td width="50%">ID</td>
            <td >{{$student->id}}</td>
        </tr>
        <tr>
            <td>姓名</td>
            <td>{{$student->name}}</td>
        </tr>
        <tr>
            <td>年龄</td>
            <td>{{$student->age}}</td>

        </tr>
        <tr>
            <td>性别</td>
            <td>
                @if($student->sex==1)
                    男
                @elseif($student->sex==2)
                    女
                @else
                    未知
                @endif
            </td>
        </tr>

        <tr>
            <td>添加日期</td>
            <td>{{date("Y-m-d H:i:s",$student->created_at)}}</td>
        </tr>

        <tr>
            <td>最后修改</td>
            <td>{{date("Y-m-d H:i:s",$student->updated_at)}}</td>
        </tr>
        </tbody>
    </table>
</div>

{{--<div class="panel panel-default">--}}
    {{--<div class="panel-heading">学生详情</div>--}}
    {{--<table class="table table-striped table-hover">--}}
        {{--<tbody>--}}
        {{--<tr>--}}
            {{--<td width="50%">ID</td>--}}
            {{--<td >1</td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
            {{--<td>姓名</td>--}}
            {{--<td>sean</td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
            {{--<td>年龄</td>--}}
            {{--<td>18</td>--}}

        {{--</tr>--}}
        {{--<tr>--}}
            {{--<td>性别</td>--}}
            {{--<td>男</td>--}}
        {{--</tr>--}}

        {{--<tr>--}}
            {{--<td>添加日期</td>--}}
            {{--<td>2016-10-15</td>--}}
        {{--</tr>--}}

        {{--<tr>--}}
            {{--<td>最后修改</td>--}}
            {{--<td>2016-10-15</td>--}}
        {{--</tr>--}}
        {{--</tbody>--}}
    {{--</table>--}}
{{--</div>--}}
    @stop