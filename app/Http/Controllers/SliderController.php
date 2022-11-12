<?php

namespace App\Http\Controllers;
use App\Models\Slider;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function carousel()
    {
       
        return view('admin.slider');
    } 

    public function store(Request $request)
    {
        $slider = new Slider;
        $slider->heading = $request->input('heading');
        $slider->description = $request->input('description');
        $slider->link = $request->input('link');  
        $slider->link_name = $request->input('link_name');
         $image=$request->file;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/slider/',$filename);
            $slider->image = $filename;
        }

        $slider->status = $request->input('status') == true ? '1': '0';
        $slider->save();
        return redirect()->back()->with('status','Slider Added Successfully');

         
      

    
    }



    public function showslider()
    {
        $slider=slider::all();
        return view('admin.showslider',compact('slider'));
    }

    public function updateslider($id)
    {
        $slider=slider::find($id);
        return view('admin.updateslider',compact('slider'));
    }
    
    

   
}

