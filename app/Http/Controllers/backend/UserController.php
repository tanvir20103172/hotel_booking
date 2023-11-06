<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loginForm(){
        return view ('admin.pages.login');
    }
    public function loginPost(Request $request)
    {
            $val=Validator::make($request->all(),
            [
                'email'=>'required|email',
                'password'=>'required|min:6',
            ]);

            if($val->fails())
            {
                //message
                return redirect()->back()->withErrors($val);
            }

            $credentials=$request->except('_token');
            // $credentials=$request->only('email','password');

            // if(auth()->attempt($credentials))

            $login=auth()->attempt($credentials);
            if($login)
            {
               return redirect()->route('dashboard');
            }

           return redirect()->back()->with('message','invalid user email or password');

    }
    public function logout()
    {

        auth()->logout();
        return redirect()->route('admin.login');
        
    }


}
