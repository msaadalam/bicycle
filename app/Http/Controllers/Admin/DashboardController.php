<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\bicycle\contact_us;
use Illuminate\Http\Request;
use App\Models\bicycle\FaqsCategory;
use App\Models\bicycle\Faqs;


class DashboardController extends Controller
{
    public function iterative(){

        return view('admin.iterative');
    }

    public function events(){

        return view('admin.events');
    }

    public function hotels(){

        return view('admin.hotels');
    }

    public function faqs(){

        $category = contact_us::all();

        return view('admin.createfaqs')->with('category',$category);

        
    }

    

}
