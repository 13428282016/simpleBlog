<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    protected $codeTableName='register_codes';
    protected $expire=300;
    public function getCode(Request $request)
    {

        $this->validate($request,[
           'email'=>'required|email'
        ]);
        $email=$request->get('email');
        $code=str_random(6);

          $result=  Mail::send('emails.code', ['code' => $code], function ($message) use ($email)
            {
                $message->to($email)->subject('轻博客注册验证码！');
            });
        if($result)
        {
           $this->setCode($email,$code);
            return ['status'=>1];
        }
        return ['status'=>0];




    }
    private function  setCode($email,$code)
    {
        $table=DB::table($this->codeTableName);
        $table->where('email',$email)->delete();

        if($table->insert(['email'=>$email,'code'=>$code]))
        {
            return true;
        }
        else
        {
            return false;
        }
    }



}
