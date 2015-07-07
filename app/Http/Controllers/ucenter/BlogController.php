<?php

namespace App\Http\Controllers\ucenter;

use App\Blog;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Guard $guard)
    {
        //
        $user=$guard->user();
        $rows=2;
        $blogs=$user->blogs()->orderBy('created_at','desc')->paginate($rows);
        return view('blog.index',['blogs'=>$blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('blog.create');
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
            'content'=>'required',
            'title'=>'required|max:32'

        ]);
        $formData=$request->only(['title','content']);
        $blog= new Blog( $formData);
        $blog->user_id= $guard->user()->id;
        if($blog->save())
        {
            return redirect('blog/'.$blog->id);
        }
        else
        {
            return redirect()->back()->withInput()->withErrors('发表失败');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Guard $guard,$id)
    {
      return redirect('blog/'.$id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Guard $guard,$id)
    {
        //
        $user=$guard->user();
        $blog=Blog::findOrFail($id);

        if($user->id!=$blog->user_id)
        {
            return view('errors.basic',['errors'=>['You do not have the permission!']]);
        }
        return view('blog.edit',['blog'=>$blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Guard $guard,Request $request,$id)
    {
        //
        //
        $this->validate($request,[
            'content'=>'required',
            'title'=>'required|max:32'

        ]);
        $formData=$request->only(['title','content']);
        $user=$guard->user();
        $blog=  Blog::findOrFail( $id);
        if($user->id!=$blog->user_id)
        {
            return view('errors.basic',['errors'=>['You do not have the permission!']]);
        }
        $blog->title=$formData['title'];
        $blog->content=$formData['content'];

        if($blog->save())
        {
            return redirect('blog/'.$blog->id);
        }
        else
        {
            return redirect()->back()->withInput()->withErrors('编辑失败');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Guard $guard,$id)
    {
        //
        $user=$guard->user();
        $blog=  Blog::findOrFail( $id);
        if($user->id!=$blog->user_id)
        {
            return view('errors.basic',['errors'=>['You do not have the permission!']]);
        }
        if($blog->delete())
        {
            return ['status'=>1];
        }
        else
        {
            return ['status'=>0];
        }
    }


}
