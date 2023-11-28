<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Roomtype;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function view($id){
        $Roomtype=Roomtype::find($id);
         return view("frontend.pages.roomview.view",compact('Roomtype'));
    }
}
