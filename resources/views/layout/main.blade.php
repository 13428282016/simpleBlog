<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable = 0">
    <title>轻博客</title>
    <meta name="author" content="wyu-wmj 929936389@qq.com">
    <meta name="description" content="it is a simple blog program !">
    <meta name="keywords"  content="blog,php,mysql,html5,css3,laravel,github,apache">
   <link rel="stylesheet" href="{{asset('css/app.css')}}">


    <script src="{{asset('/js/jquery/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap/bootstrap.min.js')}}"></script>
    <style>
        header{
            height: 61px;
            line-height: 60px;
            padding:0 30px;
            box-sizing: border-box;
            background: #222;
            position: fixed;
            top: 0;
            left: 0;

            border: 1px solid #080808;
            width: 100%;
           z-index: 9999;

        }
        header a{
            color: #0F69B5;
        }
        header .title
        {
            font-size: 20px !important;
            font-weight: bold;

        }
        header .right

        {
            float: right;
            position: relative;



        }
        header .left
        {
            float: left;
        }
        header  .right a+a{
            margin-left: 20px;
            vertical-align: middle;
        }
       header .navbar-nav > li > a {
           padding-top: 20px;
           padding-bottom: 20px;
       }

        header ul.nav
        {
           background: #222;

        }

        header .nav-toggle
        {
            position: absolute;
            top:0;
            right: 0px;
            padding: 0px;
            width: 60px;
            height: 60px;
            line-height: 60px;
            text-align: center;
            z-index: 1000;
        }
        @media (min-width: 768px)
        {
            header .nav-toggle
            {
                display: none;

            }
            header ul.nav
            {
                display:block ;
                margin-top:0px;
            }

        }
        @media (max-width: 768px)
        {
            header ul.nav
            {
                display: none ;
                margin-top: 59px;

            }
            header .nav-toggle
            {
                display:block;
            }

        }
    </style>
</head>
<body>

<header class="clearfix">
    <div  class="left">

        <a class="title" href="/">Light Blog</a>

    </div>
    <div class="right">
        <a  class="nav-toggle" href="javascript:void(0)"> 导航</a>
        <ul class="nav navbar-nav">
            <li > <a target="_blank" href="{{url('ucenter/blog/create')}}">发微博</a></li>
                @if(isset($user))
                    <li><a class="" target="_blank" href="{{url('ucenter/blog')}}">{{$user->name}}</a></li>
                    <li><a  class="" href="{{url('home/'.$user->id)}}">首页</a></li>
                    <li><a class="" href="{{url('auth/logout')}}">登出</a></li>
            @else
               <li><a class="" href="{{url('auth/login')}}">登录</a></li>
                <li><a class=" " href="{{url('auth/register')}}">注册</a></li>

            @endif
            {{--<li class="dropdown">--}}
                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>--}}
                {{--<ul class="dropdown-menu">--}}
                    {{--<li><a href="#">Action</a></li>--}}
                    {{--<li><a href="#">Another action</a></li>--}}
                    {{--<li><a href="#">Something else here</a></li>--}}
                    {{--<li role="separator" class="divider"></li>--}}
                    {{--<li><a href="#">Separated link</a></li>--}}
                    {{--<li role="separator" class="divider"></li>--}}
                    {{--<li><a href="#">One more separated link</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        </ul>





    </div>
</header>
<div  style="margin-top: 80px;"></div>
@yield('content')
@yield('footer')

<script>
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':'{{csrf_token()}}'
        }
    })
    +function($)
    {
        var  init,

                $nav,
                main={};
        $nav=$('header ul.nav');

        init =function() {
            $('header a.nav-toggle').click(function () {
                $nav.slideToggle();

            })
        }

            init();



    }(jQuery);
</script>
</body>
</html>