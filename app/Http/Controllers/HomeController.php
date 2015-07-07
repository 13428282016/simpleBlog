<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Auth\Guard;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Guard $guard,$id)
    {
        //
        //
        $homer=User::findOrFail($id);
        $user=$guard->user();
        $rows=5;
        $blogs=$homer->blogs()->orderBy('created_at','desc')->paginate($rows);
        $isSelf=$user&&$user->id==$id?true:false;
            if(!$isSelf)
            {
                foreach($blogs as $blog)
                {
                    $blog->increment('scans');
                }
                $homer->increment('visits');
            }
        $homer->blogs=$homer->blogs()->count();
          return view('home',['blogs'=>$blogs,'homer'=>$homer,'isSelf'=>$isSelf]);
    }

}
