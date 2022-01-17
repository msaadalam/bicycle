<?php

namespace App\Http\Controllers\bicycle;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bicycle\contact_us;
use Illuminate\Support\Facades\Validator;


class ContactusController extends Controller
{
    public function contact_us(){

        return view('bicycle.contact_us');

    }

    public function submit_contact_us(Request $request){

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'description' => 'required',
            'term_condition' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', 'invalid data');
        } 
         
        if($request->term_condition == 1){
        contact_us::create([
           'first_name'=>$request->first_name,
           'last_name'=>$request->last_name,
           'email'=>$request->email,
           'telephone'=>$request->telephone,
           'description'=>$request->description,
           'term_condition'=>$request->term_condition,
           
        ]);

        return redirect()->back()->with('message', 'request submitted successfully');
    }else{

        return redirect()->back()->with('error', 'invalid data');

    }
        

    }
}
