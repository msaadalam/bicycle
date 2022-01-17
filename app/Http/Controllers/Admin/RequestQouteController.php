<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bicycle\RequestQoute;

class RequestQouteController extends Controller
{
    public function request_qoute_list(){

        $raqlist = RequestQoute::paginate(10); 
         
        return view('admin.listrequestqoute')->with('listfaqs', $raqlist);

        
    }

    public function show($id){

        $data = RequestQoute::where('id',$id)->first();
          
        return view('admin.showrequestqoute')->with('data', $data);
        
    }
}
