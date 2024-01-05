<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContuctController extends Controller
{
    public function list(){
        return view('admin.pages.contuctlist.list');
    }
}
