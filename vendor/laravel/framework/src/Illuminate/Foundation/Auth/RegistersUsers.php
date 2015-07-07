<?php

namespace Illuminate\Foundation\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

trait RegistersUsers
{
    protected $codeTableName='register_codes';
    protected $expire=300;
    use RedirectsUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegister()
    {

        return view('auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postRegister(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }
        if(!$this->checkCode($request->get('email'),$request->get('code')))
        {
            return redirect()->back()->withInput()->withErrors(['验证码错误']);
        }

        DB::table($this->codeTableName)->where('email',$request->get('email'))->delete();

        Auth::login($this->create($request->all()));

        return redirect($this->redirectPath());
    }
    private function checkCode($email,$code)
    {
        $record=DB::table($this->codeTableName)->where('email',$email)->where('code',$code)->first();
        if(empty($record))
        {
            return false;
        }
        if($record->created_at+$this->expire > time())
        {
            DB::table($this->codeTableName)->where('email',$email)->where('code',$code)->delete();
            return false;
        }
        return true;

    }
}
