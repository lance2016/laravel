@extends("common.layout")

@section("style")
    <link rel="stylesheet" href="{{asset("static/css/style.css")}}">
    @stop
@section("content")
    @include("common.validator")
    <!--自定义内容区域-->
    <div class="panel panel-default">
        <div class="panel-heading">修改学生</div>
        <div class="panel-body">
            {{--action="{{url("demo/save")}}"--}}
            @include("demo.form")

        </div>

    </div>
    @stop
