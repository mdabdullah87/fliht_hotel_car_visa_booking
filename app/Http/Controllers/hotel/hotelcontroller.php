<?php

namespace App\Http\Controllers\hotel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class hotelcontroller extends Controller
{

    public function add(){

        return view('backend.hotel.add');
}

    public function all(){

            return view('backend.hotel.all');
    }
}
