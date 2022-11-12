<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class DeviceController extends Controller
{
    function add(Request $req)
    {
        $doctor=new Doctor;
        $doctor->name=$req->name;
        $doctor->phone=$req->phone;
        $doctor->speciality=$req->speciality;
        $doctor->room=$req->room;
        $doctor->image=$req->image;

        $result=$doctor->save();
        if($result)
        {
          return["Result"=>"Data has been saved"];  
        }
        else
        {
           return["Result"=>"Operation Failed!"];  
        }   
    }
    function update(Request $req)
    {
        $doctor=Doctor::find($req->id);
        $doctor->name=$req->name;
        $doctor->phone=$req->phone;
        $doctor->speciality=$req->speciality;
        $doctor->room=$req->room;
        $doctor->image=$req->image;
        $result=$doctor->save();
        if ($result)
         {
          return["result"=>"data is updated"];  
        }
        else
        {
          return["result"=>"update operation has been failed"];  
        }
        
    }







    function list()
    {
        $doctor=Doctor::all();
        $appoint=Appointment::all();

        return[$doctor,$appoint];

        // return Doctor::all();

    }

     function delete($id)
    {
        $doctor=Doctor::find($id);
        $result=$doctor->delete();
        if($result)
        {
         return["result"=>"record has been delete"];   
        }
        else
        {
            return["result"=>"delete operation is failed!"]; 

        }
    }

    function search($name)
    {
        // The above one is use for complete match
        // return Doctor::where("name",$name)->get(); 
        // The below one is use for charachter match or as well as complete match in search api    
         return Doctor::where("name","like","%".$name."%")->get();
    }
}
