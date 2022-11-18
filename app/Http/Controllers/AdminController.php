<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }

    public function create(Request $request)
    {
        $validator = validator(request()->all(),[
            'name' => 'required',
            'phone' => 'required',
            'speciality' => 'required',
            'image' => 'required',
            'room' => 'required',
        ]);
        if($validator->fails()){
            return back()->withErrors($validator);
        }
        $doctor = new Doctor;
        
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $image->move('admin/doctorimage',$imagename);
        $doctor->image = $imagename;
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;
        $doctor->save();

        return redirect()->back()->with('message','Doctor added successfully');
    }
    public function appointment()
    {
        $data = appointment::all();
        return view('admin.appointment',compact('data'));
    }
    public function aproved($id)
    {
        $aproved = appointment::find($id);
        $aproved->status = 'Aproved';
        $aproved->save();

        return redirect()->back();
    }
    public function canceled($id)
    {
        $data = appointment::find($id);
        $data->status = 'Canceled';
        $data->save();

        return redirect()->back();
    }
    public function show_doctor()
    {
        $data = doctor::all();
        return view('admin.show_doctor',compact('data'));
    }
    public function deletedoctor($id)
    {
        $data = doctor::find($id);
        $data->delete();
        
        return redirect()->back();
    }
    public function updatedoctor($id)
    {
        $data = doctor::find($id);
        
        return view('admin.update_doctor',compact('data'));
    }
    public function editdoctor(Request $request, $id)
    {
        $data = doctor::find($id);
        $data->name = $request->name;
        $image = $request->image;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $image->move('admin/doctorimage',$imagename);
            $data->image = $imagename;
        }
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->speciality = $request->speciality;
        $data->room = $request->room;
        $data->save();

        return redirect()->back()->with('message','Doctor updated successfully');
    }
}
