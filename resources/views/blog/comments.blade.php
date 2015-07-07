
<style>
   #comments  .comment img
    {
        width: 60px;
        height: 60px;;
    }
   #comments  .comment .left
    {
      float: left;
        width: 60px;
        height: 60px;

    }
   #comments  .comment .right
    {
        float: right;
        width: 890px;

    }
   #comments .operation
   {
       float: right;
   }
   #comments .comment
    {
        padding: 15px 0;
        border-bottom: 1px solid #A1FF00;
    }
   #comments a+a{
       margin-left: 10px;
   }
    #comments .reply-container
    {
        padding: 10px 0;
        float: left;
        width: 100%;
    }
   #comments .reply-container .operation
   {
       text-align: right;
       padding: 15px 0 0 0;
   }
   #comments .reply-container .operation button+button
   {
       margin-left: 15px;
   }
    #look-chats-dlg .modal-content
    {
        height: 600px;
        overflow-y: auto;
        padding: 20px;


    }
</style>

<div id="comments-container">

    <div>
        <textarea id="comment-text" placeholder="最多输入255个字符" name="comment" class="form-control"  style="overflow-y:hidden;min-height: 32px; height:32px;" onpropertychange="this.style.height=this.scrollHeight + 'px'" oninput="this.style.height=this.scrollHeight + 'px'"></textarea>
        <div style="text-align: right ;margin-top: 20px;">
              <span style="float: left">共 <span>{{$commentAmount }}</span> 条评论</span>
            <button id="comment-btn" class="btn btn-warning" type="button">评论</button>
        </div>
    </div>
    @foreach($comments as $comment)
        <div class="comment clearfix" data-id="{{$comment->id}}">
            <div class="left" >
                <a href="{{ url('home/'.$comment->sender->id)}}"><img class="thumbnail" src="{{$comment->sender->portrait?$comment->sender->portrait:'/image/portraits/default.jpg'}} "></a>
            </div>
            <div class="right" >

                <p><a href="{{ url('home/'.$comment->sender->id)}}">{{$comment->sender->name}}</a> :
                    @if($comment->receiver_id)
                        回复<a href="{{ url('home/'.$comment->receiver->id)}}">{{$comment->receiver->name}}</a> :
                    @endif
                    {{$comment->content}}
                </p>
                <div style="padding-top: 10px;">
                    <span>{{$comment->created_at}}</span>
                    <div class="operation">
                        @if($user&&($comment->sender_id==$user->id||$blog->user_id==$user->id)) <a  class="drop-comment-btn" href="javascript:void(0)">删除</a> @endif
                        @if($comment->receiver_id) <a class="look-chats" href="javascript:void(0)">查看对话</a>@endif
                        <a class="reply" href="javascript:void(0)">回复</a>
                    </div>
                </div>
            </div>

        </div>


    @endforeach

    <div id="pages" style="text-align: center">
        {!!$comments->render()!!}
    </div>
    <div id="reply-tpl" class="hide">

        <div  class="reply-container ">
            <div>
                <textarea placeholder="最多输入255个字符" name="comment" class="form-control"  style="overflow-y:hidden;min-height: 32px; height:32px;" onpropertychange="this.style.height=this.scrollHeight + 'px'" oninput="this.style.height=this.scrollHeight + 'px'"></textarea>
            </div>
            <div class="operation">
                <button class="cancel-reply btn btn-danger" href="">取消</button>
                <button  class="sure-reply btn btn-info"  href="">回复</button>

            </div>
        </div>
    </div>
</div>


<div style="z-index: 10000" id="look-chats-dlg" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <div  class="modal-content">
            <p style="text-align: center;line-height: 40px;">评论加载中...</p>
        </div>
    </div>
</div>


<script src="{{asset('js/comment.js')}}"></script>
<script>
  var comment=  (function(){
        var init,
                blogIDSelector,
                convertUrl,
                comment,
                valid,
                getCommentsContainer,
                pagesID,
                callback,
                commentBtnID,
                openReplyDialog,
                closeReplyDialog,

                createReplyPanel,
                isExistReplyDialog,
                getReplyDialog,
                openChatsDialog,
                lookChatDialogID;

      comment={};

      lookChatDialogID='#look-chats-dlg';
       pagesID='#pages'
        blogIDSelector='#blog_id';
      commentBtnID='#comment-btn'
      comment.getCommentsContainer=getCommentsContainer=function()
      {
          return $('#comments');
      }

      comment.valid=valid=function(content,btn)
      {
          var
                  $commentBtn;
          $commentBtn=$(btn);

          if(!content)
          {
              $commentBtn.tooltip({title:'请输入内容！',trigger:'manual'}).tooltip('show');
              setTimeout(function(){
                  $commentBtn.tooltip('destroy');
              },2000);
              return false;
          }
          if( content.length>255)
          {
              $commentBtn.tooltip({title:'字数不能大于255',trigger:'manual'}).tooltip('show');;

              setTimeout(function(){
                  $commentBtn.tooltip('destroy');
              },2000);
              return false;

          }
          return true;
      }
      getReplyDialog=function (comment)
      {
          return $(comment).find('.reply-container');
      }
      isExistReplyDialog=function (comment)
      {
          return $(comment).find('.reply-container').size();

      }

        callback=function(data)
        {
            var container;

            container=comment.getCommentsContainer();
            container.html(data);
            convertUrl(pagesID,arguments.callee);
        }
      openReplyDialog=function(source)
      {
          var $dlg,
                  $source,
                  $comment;


          $source=$(source);
          $comment=$source.parents('.comment');
          if(isExistReplyDialog($comment))
          {
                $dlg=getReplyDialog($comment)

          }
          else
          {
                $dlg=createReplyPanel();
                $dlg.hide();
                $comment.find('.right').append($dlg);
          }
          $dlg.slideDown();
      }
     comment.createReplyPanel= createReplyPanel=function()
      {
           return $('#reply-tpl .reply-container').clone(true);

      }
      closeReplyDialog=function(source)
      {
          var $source,
                  $replyContainer;
          $source=$(source);
           $replyContainer=  $source.parents('.reply-container');
          $replyContainer.find('textarea').css('height','32px').val('');
          $replyContainer.slideUp()

      }
      openChatsDialog=function(source)
      {
          var $source,
                  $dlg,
                  $comment,
                  id;
          $source=$(source);
          $dlg=$(lookChatDialogID);
          $comment=$source.parents('.comment');
          id=$comment.data('id');
          $dlg.data('id',id);
          $dlg.modal('show');

      }
        init=function()
        {
            $(lookChatDialogID).on('show.bs.modal',function()
            {
                var id,
                        $this
                        ;

                $this=$(this);
                id=$this.data('id');
                BLOGCOMMENT.lookChats(id,function(data)
                {
                    var $container;
                    $container=$this.find('.modal-content');
                    $container.html(data);
                })
            }).on('hidden.bs.modal',function(){
                var $container,$this;
                $this=$(this);
                $container=$this.find('.modal-content');
                $container.html('    <p style="text-align: center;line-height: 40px;">评论加载中...</p>');
            });
            $(commentBtnID).click(function()
            {
                var $this,
                        content,
                        id;
                $this=$(this);
                content=$( '#comment-text').val();
                if(!valid(content,$this))
                {
                    return;
                }
                id=$(blogIDSelector).val();

                $this.button('loading');
                blog.comment(id,content,function(data)
                {
                    blog.getComments(id,function(data){

                        $this.button('reset');
                        callback(data);
                    });
                });

            })

            $('#comments-container').delegate('.reply','click',function(){
                openReplyDialog(this);
            }).delegate('.cancel-reply','click',function()
            {
                closeReplyDialog(this);
            }).delegate('.sure-reply','click',function()
            {
                  var content,
                          $this,
                          $comment;
                $this=$(this);
                content=$this.parents('.reply-container').find('textarea').val();
                if(!valid(content,$this))
                {
                    return;
                }
                $this.button('loading');
                $comment=$this.parents('.comment');
                BLOGCOMMENT.reply($comment.data('id'),content,function(ret)
                {

                    if(ret.status==401)
                    {
                        location.href='/auth/login';
                    }

                   else if(ret.status==1)
                    {

                        blog.getComments($('#blog_id').val(),function(data){

                            $this.button('reset');
                            callback(data);
                        });
                    }

                });
            }).delegate('.drop-comment-btn','click',function(){
                var
                        $this,
                        $comment;
                $this=$(this);
                $comment=$this.parents('.comment');
                $this.button('loading');
                BLOGCOMMENT.drop($comment.data('id'),function(ret){

                    if(ret.status==401)
                    {
                        location.href='/auth/login';
                    }

                    else if(ret.status==1)
                    {

                        blog.getComments($('#blog_id').val(),function(data){

                            $this.button('reset');
                            callback(data);
                        });
                    }
                })

            }).delegate('.look-chats','click',function(){

                openChatsDialog(this);
            })


        }
        init();
      return comment;
    })();
</script>