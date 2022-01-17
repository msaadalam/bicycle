<?php

namespace App\Http\Controllers\bicycle;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bicycle\RequestQoute;
use Illuminate\Support\Facades\Validator;

class RequestQouteController extends Controller
{
    public function submit_request_qoute(Request $request){
        
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'num_of_adults' => 'required|numeric',
            'num_of_youths' => 'required|numeric',
            'daterange' => 'required',
            'height_participants' => 'required',
            'additional_info' => 'required',
            'remarks' => 'required',
            'dietary' => 'required',
            'people*' => 'required',
            'categories*' => 'required',
            'term_condition' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', 'invalid data');
        } 
        if($request->term_condition == 1){
             RequestQoute::create([
               'first_name'=>$request->first_name,
               'last_name'=>$request->last_name,
               'email'=>$request->email,
               'telephone'=>$request->telephone,
               
               'people'=>implode('|', $request->people),
               'categories'=>implode('|', $request->categories),
               'num_of_adults'=>$request->num_of_adults,
               'num_of_youths'=>$request->num_of_youths,
               'daterange'=>$request->daterange,
               'height_participants'=>$request->height_participants,
               'additional_info'=>$request->additional_info,
               'remarks'=>$request->remarks,
               'dietary'=>$request->dietary,
               
             ]);

             return redirect()->back()->with('message', 'Request submitted successfully');

            }else{

                return redirect()->back()->with('error', 'please tick for monthly inspiration');
        
            }

    }
}
