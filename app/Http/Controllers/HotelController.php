<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class HotelController extends Controller
{
    public function list(){
        $hotels=Hotel::paginate(3);
        return view('admin.pages.hotel.list',compact('hotels'));
    }
    public function form(){
        return view('admin.pages.hotel.form');
    }
    
    public function store(Request $request){
        $valided=Validator::make($request->all(),[
            'branch'=>'required',
            'email'=>'required',
            'address'=>'required',
            'contuct_number'=>'required'
        ]);

        if($valided->fails()){
            return redirect()->back()->witherrors($valided);
        }
        

        Hotel::create([
            'branch'=>$request->branch_name,
            'email'=>$request->email_address,
            'address'=>$request->address,
            'contuct_number'=>$request->contuct_number,
            'action'=>$request->action

        ]);
        // notify()->success('Laravel Notify is awesome!');
        return redirect()->back()->witherrors($valided);
    
    }
}
