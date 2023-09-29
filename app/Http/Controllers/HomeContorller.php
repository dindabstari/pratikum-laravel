<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Controllers\HomeController;

class HomeContorller extends Controller
{
    public function index(){
        return view ('halaman-1');
    }
}
