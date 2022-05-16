<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class importController extends Controller
{
    public function storange(Request $request){
        // $image = $request->file('image');
        // $path = Storage::disk('public')->put('image_test', $image);

        $images = $request->file('images');
        foreach($images as $image){
            $path = Storage::disk('public')->put('image_test', $image);
        }

        $path = Storage::disk('public')->files('image_test');
        $list = [];
        foreach($path as $file){
            $list[] = Storage::url($file);
        }
        return view('show')->with('list',$list);
    }

    public function show(){
        $path = Storage::disk('public')->files('image_test');
        $list = [];
        foreach($path as $file){
            $list[] = Storage::url($file);
        }
        return view('show')->with('list',$list);
    }
}
