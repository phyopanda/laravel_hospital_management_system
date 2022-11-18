<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.  
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function redirect()
    {
        if(Auth::id()){
            if(Auth::user()->usertype=='0'){
                $doctor = doctor::all();
                return view('user.home',compact('doctor'));
            }
            else{
                return view('admin.home');
            }
        }
        else{
            return redirect()->back();
        }
    }
    public function index()
    {
        if(Auth::id()){
            return redirect('/home');
        }else{

        $doctor = doctor::all();
        return view('user.home',compact('doctor'));
        }
    }
    public function create(Request $request)
    {
        $data = new appointment;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->date = $request->date;
        $data->address = $request->address;
        $data->doctor = $request->doctor;
        $data->message = $request->message;
        $data->status = 'In progress';
        if(Auth::id())
        {
            $data->user_id = Auth::user()->id;
        }
        $data->save();

        return redirect()->back()->with('appointment','Your appointment request has been sent successfully. Thank you!');
    }
    public function appointment()
    {
      if(Auth::id())
      {
        $user_id = Auth::user()->id;
        $data = appointment::where('user_id',$user_id)->get();
        return view('user.my_appointment',compact('data'));
      }
      else
      {
        return redirect()->back();
      }
    }
    public function cancel_appointment($id)
    {
        $data = appointment::find($id);
        $data->delete();

        return redirect()->back()->with('appointment','Appointment cancel is successfully');
    }
}
