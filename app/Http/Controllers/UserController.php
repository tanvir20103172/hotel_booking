<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

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
   
    public function list(){
        $users=User::paginate(3);
        return view('admin.pages.users.list',compact('users'));
    }
    
    public function form(){
    
        return view('admin.pages.users.form');
    }

    public function store(Request $request){
        
        // $valided=Validator::make($request->all(),[
        //        'name'=>'required',
        //        'email'=>'required',
        //        'role'=>'required',
        //        'image'=>'required'
        //    ]);
   
        //    if($valided->fails()){
        //        return redirect()->back()->witherrors($valided);
        //    }
    
#
           User::create([
               'name'=>$request->name,
               'email'=>$request->email,
               'role'=>$request->role,
               'password'=>$request->password,
           ]);
           // notify()->success('Laravel Notify is awesome!');
           return redirect()->back();
 } 
}
