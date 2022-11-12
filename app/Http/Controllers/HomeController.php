<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\Contactus;
use App\Models\Slider;



class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $doctor = doctor::all();
        
                $slider = slider::all();
                return view('user.home',compact('doctor','slider'));
            }
            else
            {
                return view('admin.home');
            }

        }
        else
        {
            return redirect()->back();
        }
    }

    public function index()
    {
        if(Auth::id())
        {
            return redirect('home');
        }

        else
        {
        $doctor = doctor::all();

        $slider = slider::where('status','0')->get(); 
        return view('user.home',compact('doctor','slider'));
        }
    }
    public function appointment(Request $request)
    {
        $data = new appointment;
        $data->name=$request->name;
        $data->email=$request->email;
        
        $data->phone=$request->number;
        $data->doctor=$request->doctor;
        $data->date=$request->date;
        $data->message=$request->message;
        $data->status='In progress';
        if(Auth::id())
        {
        $data->user_id=Auth::user()->id;
         }
         $data->save();

         return redirect()->back()->with('message','Appointment Request Successful. we will contact you soon');
    }
    public function myappointment()
    {
        if(Auth::id())
            {
                if(Auth::user()->usertype==0)
                {
                   $userid=Auth::user()->id;
                   $appoint=appointment::where('user_id',$userid)->get();
                   $doctor = doctor::all();
                   return view('user.my_appointment',compact('appoint','doctor')); 
                }
                
         }
        else
        {
            return redirect()->back();
        }
    }

    public function cancel_appoint($id)
    {
        $data=appointment::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function about()
    { 
        $doctor = doctor::all();
        return view('user.aboutus',compact('doctor'));
       
    }

    public function doctorspage()
    {
        $doctor = doctor::all();
        return view('user.doctorspage',compact('doctor'));
    }

    public function blog()
    {
        $doctor = doctor::all();
        return view('user.blog',compact('doctor'));
    }

    public function contact()
    {
        $doctor = doctor::all();
        return view('user.contactus',compact('doctor'));
    }

    public function blogdetails()
    {
        $doctor = doctor::all();
        return view('user.blogdetails',compact('doctor'));
    }

    // public function appointmentdirect()
    // {
    //     return view('user.appointment');
    // }


    public function contactus(Request $request)
    {

      $data = new contactus;
      $data->name=$request->name;
      $data->email=$request->email;
      $data->phone=$request->phone;
      $data->subject=$request->subject;
      $data->message=$request->message;
      if(Auth::id())
      {
        $data->user_id=Auth::user()->id;
      }
      $data->save();
      return redirect()->back()->with('message','Contactus Request Successful. We will contact with you soon');
      
    }
}
