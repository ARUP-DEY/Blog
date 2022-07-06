<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Student;

class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $students = DB::table('students')->get();

        return view('Students/students_list',["students"=>$students]);
    }
    public function add()
    {
        return view('Students/add');
    }

    public function addStudent(Request $request){
        //dd($request->all());
        $name = $request->name;
        $email = $request->email;
        $dob = $request->dob;
        $roll = $request->roll;
        $class = $request->class;
        $h_Qualification = $request->h_Qualification;
        $gender = $request->gender;
        

        if($request->hasfile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/profile/', $filename);
        }

        $Student = new Student;

        $Student->name = $name;
        $Student->email = $email;
        $Student->dob = date("Y-m-d", strtotime($dob));
        $Student->roll = $roll;
        $Student->class = $class;
        $Student->h_Qualification = $h_Qualification;
        $Student->gender = $request->gender;
        $Student->image = $filename;
        $Student->status = $request->status;
        //dd($Student);
        $Student->save();
        return Redirect::back();

        
    }


    public function edit(Request $request)
    {
        //dd($request->id);
        $student = Student::find($request->id);
       // dd($student);
        return view('Students/edit', ["student"=>$student]);
    }



public function updateStudent(Request $request){
        //dd($request->all());
        $name = $request->name;
        $id = $request->id;
        $email = $request->email;
        $dob = $request->dob;
        $roll = $request->roll;
        $class = $request->class;
        $h_Qualification = $request->h_Qualification;
        $gender = $request->gender;
        

        if($request->hasfile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/profile/', $filename);
        }else{
            $filename ='';
        }

        
        $Student = Student::find($id);

        $Student->name = $name;
        $Student->email = $email;
        $Student->dob = date("Y-m-d", strtotime($dob));
        $Student->roll = $roll;
        $Student->class = $class;
        $Student->h_Qualification = $h_Qualification;
        $Student->gender = $request->gender;
        $Student->image = $filename;
        $Student->status = $request->status;
        //dd($Student);
        $Student->save();
        return Redirect::back();

        
    }




    public function view(Request $request)
    {
        //dd($request->id);
        $student = Student::find($request->id);
       // dd($student);
        return view('Students/view', ["student"=>$student]);
    }



public function viewStudent(Request $request){
        //dd($request->all());
        $name = $request->name;
        $id = $request->id;
        $email = $request->email;
        $dob = $request->dob;
        $roll = $request->roll;
        $class = $request->class;
        $h_Qualification = $request->h_Qualification;
        $gender = $request->gender;
        

        if($request->hasfile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/profile/', $filename);
        }else{
            $filename ='';
        }

        
        $Student = Student::find($id);

        $Student->name = $name;
        $Student->email = $email;
        $Student->dob = date("Y-m-d", strtotime($dob));
        $Student->roll = $roll;
        $Student->class = $class;
        $Student->h_Qualification = $h_Qualification;
        $Student->gender = $request->gender;
        $Student->image = $filename;
        $Student->status = $request->status;
        //dd($Student);
        $Student->save();
        return Redirect::back();

        
      }
}

