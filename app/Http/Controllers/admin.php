<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class admin extends Controller
{
    public function home (Request $request){
       
        $files = File::get();
        $nama='tito';
          return view('admin.home', ['nama'=>$nama,'files'=>$files]);
       
    }
    public function upload (Request $request){
       
        $request->validate([
            'file' => 'required|mimes:docx,pdf|max:2048'
        ]);

        $file = $request->file('file');
        $nama_sop = $request->input('nama_sop');
        $bidang = $request->input('bidang');
        $fileName = $file->hashName();
        $file->storeAs('uploads', $fileName);

        File::create([
            'original_name' => $file->getClientOriginalName(),
            'generated_name' => $fileName,
            'bidang'=> $bidang,
            'nama_sop'=>$nama_sop,
        ]);

        return redirect('/admin');
            
       
    }

}
