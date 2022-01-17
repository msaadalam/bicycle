<?php

namespace App\Http\Controllers\bicycle;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
     public function request_a_qoute(){

        return view('bicycle.request_qoute');
    } 

    public function contact_us(){

        return view('bicycle.contact_us');

    }
}
