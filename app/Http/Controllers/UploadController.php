<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
   public function upload(){
       return view('upload');
   }

   public function response(Request $request){
       $filename = time()."-ws." . $request->file('image')->getClientOriginalExtension();
       echo $request->file('image')->storeAs('uploads' , $filename);
    }
}
