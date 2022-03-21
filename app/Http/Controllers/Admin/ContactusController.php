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
    
    
    $files = $request->file('file');


        if (!empty($files)) {
            $ext = $files->getClientOriginalExtension();
            if ($ext === 'pdf' || $ext === 'doc' || $ext === 'docx') {
                $filename = 'resume' . $id . '.' . $files->getClientOriginalExtension();
                $image_full_name = $filename;
                $upload_path = 'public/attachment/app_resume/';
                $image_url = $upload_path . $image_full_name;
                $files->move($upload_path, $image_full_name);
                Application::where('id', $id)->first()->update([
                    'resume_url' => $image_url,
                ]);
                $applicant = Application::where('id', $id)->firstOrFail();
                $applicant->resume_url = $image_url;
                $applicant->save();
                $applicant->update($request->all());

                (new Log())->createLog(
                    $applicant->id,
                    session('staff_id'),
                    'Applicant details updated'
                );
        

}
