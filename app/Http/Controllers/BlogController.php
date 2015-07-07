<?php

namespace App\Http\Controllers;

use App\Blog;
use App\User;
use Illuminate\Auth\Guard;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{


    public function show(Guard $guard, $id)
    {
        $user=$guard->user();

        $blog=Blog::findOrFail($id);
        $isSelf=$user&&$user->id==$blog->user_id?true:false;
        if(!$isSelf)
        {
            $blog->increment('scans');
            $homer=User::findOrFail($blog->user_id);
            $homer->blogs=$homer->blogs()->count();


        }
        else
        {
            $user->blogs=$user->blogs()->count();
          $homer=$user;
        }



        return view('blog.show',['blog'=>$blog,'isSelf'=>$isSelf,'user'=>$homer]);
    }


}
