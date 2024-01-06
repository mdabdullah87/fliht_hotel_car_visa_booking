<?php

namespace App\Http\Controllers\car;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class carcontroller extends Controller
{



     
    public function add(){

        return view('backend.car.add');
    }


    public function all(){

        return view('backend.car.all');
    }
}
