<?php

namespace App\Http\Controllers\bicycle;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bicycle\Faqs;
use App\Models\bicycle\Faqscategory;

class FaqController extends Controller
{
    public function index(){

        /* $full_data = [];
        $data = Faqscategory::get();
        foreach($data as $category){
            $full_data[$category['category_name']] = Faqs::where('category_id',$category->id)->get();
            $full_data['category_count'] = Faqs::where('category_id',$category->id)->count();
        }
         */
        $data = Faqscategory::with(['faqs'])->withcount(['faqs'])->get();
       // dd($data);
        return view('bicycle.faq')->with('data',$data);
    }

    public function show($id){

        $data = Faqs::with(['category'])->where('id',$id)->first();
          
        return view('admin.showfaqs')->with('data', $data);
        
    }


    public function createfaqscategory(Request $request){

        Faqscategory::create([
            'category_name'=> $request->category,
        
        ]);
        $category = Faqscategory::all();
        return redirect()->back()->with('category',$category)->with('message', 'FAQs created successfully');

    }


    public function createfaqs(Request $request){

        Faqs::create([
            'category_id'=> $request->category_id,
            'question'=> $request->question,
            'description'=> $request->description,
        
        ]);
        return redirect()->back()->with('message', 'FAQs created successfully');

    }

    public function listfaqs(){
              
        $data = Faqs::with(['category'])->paginate(10);    
        return view('admin.listfaqs')->with('listfaqs', $data);
        
    }

    public function edit($id){
                  
        $data = Faqs::with(['category'])->where('id',$id)->first();
        
        $category =  Faqscategory::all();  
        return view('admin.updatefaqs')->with('data', $data)->with('category',$category);
        
    }

    public function update(Request $request){
        //dd($request->all());
        Faqs::findorfail($request->id)->update([
            'question' => $request->question,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);
        return redirect()->back()->with('message', 'FAQs updated successfully');
        
    }
    
    public function destroy($id){
        $data = Faqs::findorfail($id);
        $data->delete();      
        return redirect()->back()->with('message', 'FAQs deleted');          
  }        
}
