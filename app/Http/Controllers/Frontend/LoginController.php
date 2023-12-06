<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(){
        return view('frontend.pages.login.form');
    }

    public function loginPosts(Request $request)
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
                
               return redirect()->route('home');
            }
            

           return redirect()->back()->with('message','invalid user email or password');

    }
    public function web_logout()
    {

        auth()->logout();
        return redirect()->route('home');
        
    }


    public function registration(){
        return view('frontend.pages.registration.form');
    }

    public function user_registration(Request $request){
        //dd($request);
        // $validate=Validator::make($request->all(),[
        //      'first_name'=>'required',
        //      'last_name'=>'required',
        //      'contuct_number'=>'required',
        //      'email'=>'required',
        //      'password'=>'required'
        // ]);

        // if($validate->fails()){
        //     return redirect()->back();
        // }

        User::create([
        'name'=>$request->name,
        'role'=>'customer',
        'email'=>$request->email,
        'password'=>$request->password,
    ]);

    return redirect()->back();
    }


    public function demo(Request $request){
       dd('aaaa');
    }
}
