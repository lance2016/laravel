<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>轻松学会Laravel @yield("title")</title>
    <link rel="stylesheet" href="{{asset("static/css/bootstrap.min.css")}}">
    @section("style")

        @show
</head>
<body>


<!--头部-->
@section("header")
<div class="jumbotron">
    <div class="container">
        <h2>轻松学会Laravel</h2>

        <p>玩转Laravel表单</p>
    </div>
</div>
@show

<!--中间内容区-->
<div class="container">
    <div class="row">

        <!--左侧菜单区域-->
        <div class="col-md-3">
            @section("leftmenu")
            <div class="list-group">
                <a href="{{url('/demo/index')}}" class="list-group-item
                {{Request::getPathInfo()=='/demo/index' ? 'active':''}}">学生列表</a>
                <a href="{{url('/demo/create')}}" class="list-group-item
                    {{Request::getPathInfo()=="/demo/create" ? "active":''}}">新增学生</a>
            </div>
                @show
        </div>

        <!--右侧内容区域-->
        <div class="col-md-9">

            @yield("content")
            <!--自定义内容区域-->




        </div>
    </div>
</div>

<!--尾部-->
@section("footer")
<div class="jumbotron" style="margin: 0;">
    <div class="container">
        <span>@2016 immoc</span>
    </div>
</div>
@show


<!--jquery文件-->
<script src="{{asset('static/js/jquery-2.2.2.min.js')}}"></script>
{{--bootstrap.min.js--}}
<script src="{{asset('static/js/bootstrap.min.js')}}"></script>
@section("javascript")
    @show
</body>
</html>