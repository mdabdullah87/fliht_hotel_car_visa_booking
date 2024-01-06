<?php

namespace App\Http\Controllers\visa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class visacontroller extends Controller
{

    public function add(){

        return view('backend.visa.add');
}


    public function all(){

        return view('backend.visa.all');
}
}
