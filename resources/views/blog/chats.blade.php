
<style>
    #chats .comment .right
    {

    }
</style>
<div id="chats">
@foreach($comments as $comment)

    <div class="comment clearfix" data-id="{{$comment->id}}">
        <div class="left col-sm-2  col-md-1 col-lg-1" >
            <a href="{{ url('home/'.$comment->sender->id)}}"><img class="thumbnail" src="{{$comment->sender->portrait?$comment->sender->portrait:'/image/portraits/default.jpg'}} "></a>
        </div>
        <div class="right col-sm-10 col-md-11 col-lg-11" >

            <p><a href="{{ url('home/'.$comment->sender->id)}}">{{$comment->sender->name}}</a> :
                @if($comment->receiver_id)
                    回复<a href="{{ url('home/'.$comment->receiver->id)}}">{{$comment->receiver->name}}</a> :
                @endif
                {{$comment->content}}
            </p>
            <div style="padding-top: 10px;">
                <span>{{$comment->created_at}}</span>
                {{--<div class="operation">--}}
                    {{--@if($user&&($comment->sender_id==$user->id||$blog->user_id==$user->id)) <a  class="drop-comment-btn" href="javascript:void(0)">删除</a> @endif--}}
                    {{--<a class="reply" href="javascript:void(0)">回复</a>--}}
                {{--</div>--}}
            </div>
        </div>

    </div>

@endforeach
</div>