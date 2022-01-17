<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bicycle\contact_us;

class ContactusController extends Controller
{
    public function contact_us_list(){

        $data = contact_us::paginate(10); 
       // dd($data);   
        return view('admin.listcontactus')->with('listfaqs', $data);

        
    }

    public function show($id){

        $data = contact_us::where('id',$id)->first();
          
        return view('admin.showcontactus')->with('data', $data);
        
    }

}
