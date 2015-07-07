@extends('layout.main')

@section('content')



    <style>
        #blog .operation
        {
            float: right;
        }
        #blog .content p{
            line-height: 25px;


        }
        #blog .content img {
            max-width: 100%;
        }
        #blog .panel-heading {line-height: 34px;}
        #content
        {
            width: 1210px;
            margin: 0 auto;
        }

        #content .left
        {
            float: left;
            width: 200px;
        }
        #content .right
        {
            float: right;
            width: 1000px;
        }
        #portrait {
            text-align: center;;
        }
        #portrait img{
            width: 100px;
            height: 100px;
            display: inline-block;
        }

        #stat ul{
            list-style: none;
            padding: 0;;

        }
        #stat ul li{
            float: left;
            height: 84px;
            width: 84px;

        }
        #stat ul li div{
            text-align: center;;
            line-height: 35px;
        }
        #comment  textarea
        {
            width: 100%;

        }
        #comment-btn
        {

        }
    </style>
    <div id="content" class="clearfix">

        <input id="blog_id" type="hidden" value="{{$blog->id}}">
        <div class="left  panel  panel-default ">
            <div class="panel-heading ">
                用户信息
            </div>
            <div  class="panel-body"  >
                <div id="portrait">
                    <a href="{{url('home/'.$user->id)}}"><img class="thumbnail center" src="{{$user->portrait or '/image/portraits/default.jpg'}}"/></a>
                </div>
                <div style="text-align: center;margin: 0px  0 10px  0;">
                    <a href="{{url('home/'.$user->id)}}">{{$user->name}}</a>
                </div>
                <div id="stat">
                    <ul class="clearfix">
                        <li>
                            <div><span class="badge">{{$user->visits}}</span></div>
                            <div>访问</div>
                        </li>
                        <li>  <div><span class="badge">{{$user->blogs}}</span></div>
                            <div>博客</div></li>
                    </ul>
                </div>

            </div>


        </div>
        <div class="right">
            <div id="blog" data-id="{{$blog->id}}" class="panel panel-default">
                <div class="panel-heading clearfix"><a href="/blog/{{$blog->id}}">{{$blog->title}}</a>&nbsp;&nbsp; 浏览 <span class="badge">{{$blog->scans}}</span>&nbsp;&nbsp; <span>{{$blog->created_at}}</span>
                    <div class="operation" >@if($isSelf)<a class="btn btn-info" target="_blank" href="/ucenter/blog/{{$blog->id}}/edit">编辑</a>&nbsp;&nbsp;&nbsp;&nbsp; <a class="btn btn-danger" id="drop-btn" href="javascript:void(0)">删除</a>@endif</div></div>
                <div  class="panel-body"  >
                    <div  class="content"  style=" overflow: hidden">
                        {!!$blog->content!!}
                    </div>

                </div>

            </div>
            <div id="comment" class="panel panel-default">
                <div class="panel-heading ">
                    评论<span></span>
                </div>

                <div    class="panel-body"  >

                    <div id="comments">
                        <p id="loading" style="text-align: center">评论加载中...</p>
                    </div>
                </div>

            </div>

        </div>
        </div>

<script type="text/javascript" src="{{asset('js/blog.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/comment.js')}}"></script>
<script>
    $(function(){

        var blogIDSelector,
                commentsContainerID,
                $commentsContainer,
                pagesID,
                callback,
                init;
        blogIDSelector='#blog_id';
        commentsContainerID='#comments';
        pagesID='#pages';
        $commentsContainer=$(commentsContainerID);

        callback=function(data){
            $commentsContainer.html(data);
            BLOGCOMMENT.convertUrl(pagesID,arguments.callee);

            }
        init=function()
        {
            $('#drop-btn').click(function(){
                var $this,
                        id;
                $this= $(this).button('loading');
                id= $(blogIDSelector).val();
                blog.drop(id);

            })
        };
        init();
        blog.getComments($(blogIDSelector).val(),callback);

    });



</script>


@stop