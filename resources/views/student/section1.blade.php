@extends("layout")

@section("header")
    @parent
    <br/>
    header
@stop


@section("sidebar")
    @parent
    sidebar
    @stop

@section("content")
    content
    {{--<!--模板中输出变量-->--}}
    {{--{{$name}}--}}
    {{--<!--模板中调用php函数-->--}}
    {{--{{time()}}--}}
    {{--{{date("Y-m-d H:i:s",time())}}--}}
    {{--{{in_array($name,$arr)?"true":"false"}}--}}
    {{--{{var_dump($arr)}}--}}
    {{--{{isset($name)?$name:"default"}}--}}
    {{--{{$name1 or "default"}}--}}
    {{--<!--原样输出-->--}}
    {{--@{{ $name }}--}}

    {{--模板中的注释，浏览器无法查看--}}


    {{--<!--引入子视图-->--}}
    {{--@include("student.common1",['message'=>'我是错误信息']);--}}


{{--@if($name=="Bob")--}}
    {{--I'm Bob--}}
{{--@elseif($name=="Anna")--}}
    {{--我是Anna--}}
{{--@else--}}
    {{--我是谁--}}
{{--@endif--}}
    {{--@if(in_array($name,$arr))--}}
        {{--true--}}
    {{--@else--}}
        {{--false--}}
    {{--@endif--}}


    {{--@unless($name=="Bobs")--}}
       {{--我是波波--}}
    {{--@endunless--}}

    {{--@for($i=0;$i<10;$i++)--}}
    {{--{{$i}}<br/>--}}
    {{--@endfor--}}

    {{--@foreach($students as $student)--}}
    {{--{{$student->name}}--}}
    {{--@endforeach--}}

    {{--@forelse($students as $student)--}}
    {{--<p>{{$student->name}}</p>--}}
    {{--@empty--}}
    {{--<p>null</p>--}}
    {{--@endforelse--}}

    {{--指定url--}}
    <a href="{{url('url')}}">URL()</a>
    <br/>
    {{--指定控制器和方法名--}}
    <a href="{{action('StudentController@urlTest')}}">action()</a>
    {{--别名  此处别名也为url--}}
    <br/>
    <a href="{{route('url')}}">route</a>
@stop