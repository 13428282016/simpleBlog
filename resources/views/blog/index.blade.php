@extends('layout.ucenter')

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

    </style>
    <div id="blogs">

        @foreach($blogs as $blog)

            <div  data-id="{{$blog->id}}"  class="blog panel  panel-default">
                <div class="panel-heading clearfix"><a href="/blog/{{$blog->id}}">{{$blog->title}}</a>&nbsp;&nbsp; 浏览 <span class="badge">{{$blog->scans}}</span>&nbsp;&nbsp; </span> <span>{{$blog->created_at}}</span>
                    <div class="operation" ><a  class="btn btn-success" target="_blank" href="/blog/{{$blog->id}}">阅读全文</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-info" target="_blank" href="/ucenter/blog/{{$blog->id}}/edit">编辑</a>&nbsp;&nbsp;&nbsp;&nbsp; <a class="drop-btn btn btn-danger" href="javascript:void(0)">删除</a></div></div>
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