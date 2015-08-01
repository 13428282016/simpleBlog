@extends('layout.main')

@section('content')



    <link href="{{asset('css/blog/show.min.css')}}">

    <div id="content" class="clearfix container-fluid">
        <input id="blog_id" type="hidden" value="{{$blog->id}}">
         <div  class="row">
             <div class="col-sm-12 col-md-3">
                 <div class="left  panel  panel-default  ">
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
             </div>
               <div class="col-sm-12 col-md-9 ">
                   <div class="right ">
                       <div id="blog" data-id="{{$blog->id}}" class="panel panel-default">
                           <div class="panel-heading clearfix"><h3><a href="/blog/{{$blog->id}}.html">{{$blog->title}}</a></h3>&nbsp;&nbsp; 浏览 <span class="badge">{{$blog->scans}}</span>&nbsp;&nbsp; <span>{{$blog->created_at}}</span>
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

                           <div    class="panel-body"  ng-App="Comment"  >

                               <div id="comments" ng-view>
                                   <p id="loading" style="text-align: center">评论加载中...</p>
                               </div>
                           </div>

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