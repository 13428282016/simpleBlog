<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comment;
use Illuminate\Auth\Guard;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request,Guard $guard)
    {
        //
        $user=$guard->user();
        $id=$request->get('id');
        $blog=Blog::findOrFail($id);
        $rows=10;
        $comments=$blog->comments()->orderBy('created_at','desc')->paginate($rows);
        $comments->addQuery('id',$id);
        $commentsAmount=$blog->comments()->count();
        return view('blog.comments',["comments"=>$comments,'user'=>$user,'blog'=>$blog,'commentAmount'=>$commentsAmount]);


    }
    public function  chats(Request $request ,Guard $guard,$id)
    {
        $user=$guard->user();
        $id=$id?$id:$request->get('id');
        $comment=Comment::findOrFail($id);
        $blog=$comment->blog;
        $rows=10;



        $topComment=$this->getTopComment($id);
        if($comment->receiver_id!=$comment->sender_id)
        {
            $receiver_id=$comment->receiver_id!=$topComment->sender_id?$comment->receiver_id:$comment->sender_id;
        }
        else
        {
            $receiver_id=$comment->receiver_id;
        }

            $comments= $this->getChatsChildrenComments($topComment->id,$topComment->sender_id,$receiver_id);


       $comments= $comments->push($topComment)->sort(function($item,$item2)
        {
            return $item->id>$item2->id;
        });


        return view('blog.chats',["comments"=>$comments,'user'=>$user,'blog'=>$blog]);
    }
    function  postReply(Request $request ,Guard $guard)
    {
        $this->validate($request,[
            'content'=>'required|max:255',
            'id'=>'required|exists:comments',


        ]);
        $user=$guard->user();
        $data=$request->only(['content','id']);
        $beReplyComment=Comment::findOrFail($data['id']);


        $comment=new Comment();
        $comment->content=$data['content'];
        $comment->blog_id=$beReplyComment->blog_id;
        $comment->sender_id=$user->id;
        $comment->receiver_id=$beReplyComment->sender_id;
        $comment->parent_id=$beReplyComment->id;
        if($comment->save())
        {
            return ['status'=>1];
        }
        else
        {
            return ['status'=>0];
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    private  function getTopComment($id)
    {
        while($id)
        {
            $comment=Comment::findOrFail($id);
            $id=$comment->parent_id;

        }
        return $comment;
    }


    private function getChatsChildrenComments($topID,$selfID,$otherID)
    {

        $childrens=Comment::where('parent_id',$topID)->whereRaw("
        (
        (sender_id=$selfID and receiver_id =$otherID )
        or
          (sender_id=$otherID and receiver_id =$selfID )
         or
            (sender_id=$otherID and receiver_id =$otherID )
             or
            (sender_id=$selfID and receiver_id =$selfID )
        )")->get();
        foreach($childrens as $children)
        {
           $childrens= $childrens->merge($this->getChatsChildrenComments($children->id,$selfID,$otherID));
        }
        return $childrens;



    }

    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request,Guard $guard)
    {
        //
        $this->validate($request,[
            'content'=>'required|max:255',
            'id'=>'required|exists:blogs'

        ]);
        $user=$guard->user();
        $data=$request->only(['content','id']);
        $blog=Blog::findOrFail($data['id']);
        $comment=new Comment();
        $comment->content=$data['content'];
        $comment->blog_id=$blog->id;
        $comment->sender_id=$user->id;
        if($comment->save())
        {
            return ['status'=>1];
        }
        else
        {
            return ['status'=>0];
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Guard $guard, $id)
    {
        //
        $comment=Comment::findOrFail($id);
        $user=$guard->user();



        if($user->id!=$comment->sender_id)
        {
            $blog_id=$comment->blog_id;
            $blog=Blog::find($blog_id);
            if($user->id!=$blog->user_id)
            {
                return ['status'=>0,'error'=>"you don't have enougth permission"];
            }

        }
        if($comment->delete())
        {
            return ['status'=>1];
        }
        return ['status'=>0];


    }
}
