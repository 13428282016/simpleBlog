<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable = 0">
    <title>轻博客</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">


    <script src="{{asset('/js/jquery/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap/bootstrap.min.js')}}"></script>
    <style>
        header{
            height: 60px;
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
        }
        header .left
        {
            float: left;
        }
        header  .right a+a{
            margin-left: 20px;
            vertical-align: middle;
        }
        #ucenter
        {
            width: 1210px;
            margin: 0 auto;
        }
        #ucenter .right
        {
            float: right;
            width: 1000px;
        }
        #ucenter .left
        {
            float: left;
            width: 200px;
        }
    </style>
</head>
<body>

<header class="clearfix">
    <div  class="left">

        <a class="title" href="/">Light Blog</a>

    </div>
    <div class="right">
        <a class="btn btn-success" target="_blank" href="{{url('ucenter/blog/create')}}">发微博</a>
        @if(isset($user))
            <a  class="btn btn-info " href="{{url('home/'.$user->id)}}">{{$user->name}}</a>
            <a class="btn btn-danger" href="{{url('auth/logout')}}">登出</a>
        @else
            <a class="btn btn-success" href="{{url('auth/login')}}">登录</a>
            <a class=" btn btn-info" href="{{url('auth/register')}}">注册</a>
        @endif

    </div>
</header>
<div  style="margin-top: 80px;"></div>
<div id="ucenter" >
    <div class="left">
        <nav>

            <div class="list-group">
                <a href="{{url('ucenter/blog')}}" class="list-group-item active">
                    我的博客
                </a>
                <a href="" class="list-group-item">我的消息</a>
                <a href="#" class="list-group-item">发出的评论</a>
                <a href="#" class="list-group-item">收到的评论</a>

            </div>

        </nav>
    </div>
    <div class="right">
        @yield('content')
    </div>

</div>

@yield('footer')

<script>
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':'{{csrf_token()}}'
        }
    })
</script>
</body>
</html>