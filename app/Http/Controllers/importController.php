<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class importController extends Controller
{
    public function storange(Request $request){
        $image = $request->file('image');
        $path = Storage::disk('public')->put('image_test', $image);
        // dd(Storage::url($path));
        $path = public_path('storage/image_test');
        // dd(Storage::disk('public')->files('image_test'));
        $files = File::files($path);
        $test = [];
        foreach($files as $file){
            $test[] = Storage::url($file);
        }
         dd($test);
    }

    public function show(){
        return view('show');
    }
}
