@extends('layout.main')

@section('content')

    <style>
        .operation
        {
            float: right;
        }
        #blogs .panel-heading {line-height: 34px;}
        #blogs .blog{

        }
        #blogs .content p{
            line-height: 25px;


        }
        #blogs .content image {
            max-width: 100%;
        }
        #home
        {
            width: 1210px;
            margin: 0 auto;
        }

        #home .left
        {
            float: left;
            width: 200px;
        }
        #home .right
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
    </style>

    <div id="home" class="clearfix">

        <div class="left  panel  panel-default ">
            <div class="panel-heading ">
                用户信息
                </div>
            <div  class="panel-body"  >
               <div id="portrait">
                   <a href="{{url('home/'.$homer->id)}}"><img class="thumbnail center" src="{{$homer->portrait or '/image/portraits/default.jpg'}}"/></a>
               </div>
                <div style="text-align: center;margin: 0px  0 10px  0;">
                    <a href="{{url('home/'.$homer->id)}}">{{$homer->name}}</a>
                </div>
                <div id="stat">
                    <ul class="clearfix">
                        <li>
                            <div><span class="badge">{{$homer->visits}}</span></div>
                            <div>访问</div>
                        </li>
                        <li>  <div><span class="badge">{{$homer->blogs}}</span></div>
                            <div>博客</div></li>
                    </ul>
                </div>

                </div>


        </div>
        <div class="right">
            <div id="blogs">

                @foreach($blogs as $blog)

                    <div  data-id="{{$blog->id}}"  class="blog panel  panel-default">
                        <div class="panel-heading clearfix"><a href="/blog/{{$blog->id}}">{{$blog->title}}</a>&nbsp;&nbsp; 浏览 <span class="badge">{{$blog->scans}}</span>&nbsp;&nbsp; </span> <span>{{$blog->created_at}}</span>
                            <div class="operation" ><a  class="btn btn-success" target="_blank" href="/blog/{{$blog->id}}">阅读全文</a>@if($isSelf)&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-info" target="_blank" href="/ucenter/blog/{{$blog->id}}/edit">编辑</a>&nbsp;&nbsp;&nbsp;&nbsp; <a class="drop-btn btn btn-danger" href="javascript:void(0)">删除</a>@endif</div></div>
                        <div  class="panel-body"  >
                            <div class="content"  style="max-height: 300px; overflow: hidden">
                                {!!$blog->content!!}
                            </div>

                        </div>
                    </div>


                @endforeach
            </div>

            <div style="text-align: center">
                <?php echo  $blogs->render()?>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="{{asset('js/blog.js')}}"></script>
    <script>
        (function(){
            var init;
            init=function()
            {
                $('#blogs').delegate('.drop-btn','click',function(){
                    var $this,
                            $blog,
                            id;

                    $this=$(this);
                    $this.button('loading');
                    $blog=$this.parents('.blog');
                    id= $blog.data('id');
                    blog.drop(id);



                })

            }
            init();
        })();

    </script>
@stop