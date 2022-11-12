<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use DB;
// use File;


use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\Contactus;
use App\Models\Slider;
use Notification;
use App\Notifications\SendEmailNotification;



class AdminController extends Controller
{
    public function addview()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
               return view('admin.add_doctor'); 
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect('login');
        }
        
    }

    public function upload(Request $request)
    {
        $doctor=new doctor;

        $image=$request->file;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;

        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        
        $doctor->speciality=$request->speciality;
        $doctor->room=$request->room;

        $doctor->save();
        return redirect()->back()->with('message','Doctor Added Successfully');
    }

    public function showappointment()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
        $data=appointment::all();

        return view('admin.showappointment',compact('data'));
    }
        else
        {
            return redirect()->back();
        }

    }
           else 
           {
            return redirect('login');
           }
    }

    public function approved($id)
    {
        $data=appointment::find($id);
        $data->status='approved';
        $data->save();
        return redirect()->back();

    }
     public function canceled($id)
    {
        $data=appointment::find($id);
        $data->status='canceled';
        $data->save();
        return redirect()->back();

    }

    public function showdoctor()
    {
        $data = doctor::all();
        return view('admin.showdoctor',compact('data'));
    }

    public function deletedoctor($id)
    {
        $data=doctor::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updatedoctor($id)
    {
        $data= doctor::find($id);

        return view('admin.update_doctor',compact('data'));
    }


    public function editdoctor(Request $request , $id)
    {
        $doctor= doctor::find($id);

        $doctor->name=$request->name;

        $doctor->phone=$request->phone;

        $doctor->speciality=$request->speciality;

        $doctor->room=$request->room;

        $image=$request->file;

        if($image)
        {



        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->file->move('doctorimage',$imagename);

        $doctor->image=$imagename;

        }

        $doctor->save();

        return redirect()->back()->with('message','Doctor Details update Successfully');

    }

    public function emailview($id)
    {
        $data=appointment::find($id);
        return view('admin.email_view',compact('data'));
    }

    public function sendemail(Request $request, $id)
    {
        $data=appointment::find($id);
        $details=[
            'greeting' => $request->greeting,
            'body' => $request->body,
            'actiontext' => $request->actiontext,
            'actionurl' => $request->actionurl,
            'endpart' => $request->endpart
        ];

        Notification::send($data,new SendEmailNotification($details));

        return redirect()->back()->with('message','Email send is successful');
    }
    // This is use for contactus enquiry and send email
    // public function viewemail($id)
    // {
    //    $data=appointment::find($id);
    //      return view('admin.viewemail',compact('data'));
    // }
    // public function emailsend(Request $request, $id)
    // {
    //      $data=appointment::find($id);
    //     $details=[
    //         'greeting' => $request->greeting,
    //         'body' => $request->body,
    //         'actiontext' => $request->actiontext,
    //         'actionurl' => $request->actionurl,
    //         'endpart' => $request->endpart
    //     ];
    //      Notification::send($data,new SendEmailNotification($details));

    //     return redirect()->back()->with('message','Email send is successful');
        
        

    // }

    public function showcontact()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
        $data=contactus::all();
        return view('admin.showcontact',compact('data'));
    }
        else
        {
            return redirect()->back();
        }

    }
           else 
           {
            return redirect('login');
           }
    }



    // Here we start for slider 
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
        $sliders=DB::select('select * from sliders');
       
        // return view('admin.showslider',compact('slider'));
        return view('admin.showslider',['sliders'=>$sliders]);

        

    }
   

    public function updateslider($id)
    {
        $slider=slider::find($id);
        return view('admin.updateslider',compact('slider'));
    }

    public function editslider(Request $request, $id)
    {
         $slider=slider::find($id);
        $slider->heading = $request->input('heading');
        $slider->description = $request->input('description');
        $slider->link = $request->input('link');  
        $slider->link_name = $request->input('link_name');
         $image=$request->file;
        if($request->hasfile('image'))
        {
            $destination = 'uploads/slider/'.$slider->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/slider/',$filename);
            $slider->image = $filename;
        }

        $slider->status = $request->input('status') == true ? '1': '0';
        $slider->save();
        return redirect()->back()->with('status','Slider Updated Successfully');

    }
    public function deleteslider($id)
    {
        $slider=slider::find($id);
        $slider->delete();
        return redirect()->back();
    }

  


    // Here we end slider

    
     

   
}
