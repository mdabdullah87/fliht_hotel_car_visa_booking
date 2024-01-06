<?php

namespace App\Http\Controllers\fliht;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class flihtcontroller extends Controller
{
    public function all(){

            return view('backend.fliht.allfliht');
    }

    public function add(){

        return view('backend.fliht.add');
}
}
