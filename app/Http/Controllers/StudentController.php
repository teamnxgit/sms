<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Grade;
use Redirect;
use Session;
use Input;
use Symfony\Contracts\Service\Attribute\Required;

class StudentController extends Controller{

    public function students(Request $request){
        $grades = Grade::with('students')->get();
        $data['grades'] = $grades;
        return view('student.students')->with($data);
    }

    public function new(Request $request){
        $grades = Grade::all();
        $data['grades'] = $grades;
        return view('student.new')->with($data);
    }

    public function add(Request $request){

        $request->validate([
            'index_no'=>'required',
            'full_name'=>'required',
            'dob'=>'required',
            'bc_num'=>'required',
            'admission_date'=>'required',
            'grade'=>'required',
            'parent_name'=>'required'
        ]);

        $student_count = Student::where('index',$request->index_no)->count();

        if ($student_count>0) {
            Session::flash('danger','Index number already exist!');
        }

        else {

            if ($request->photo) {
                $request->validate([
                    'photo' => 'image|mimes:jpeg,png,jpg|max:2048',
                ]);
            }

            $student = New Student;
            $student->index = $request->index_no;
            $student->full_name = $request->full_name;

            $student->address = $request->address_1;
            if (isset($request->address_2)) {
                $student->address =  $student->address."\n".$request->address_2;
            }
            if (isset($request->address_3)) {
                $student->address =  $student->address."\n".$request->address_3;
            }
            if (isset($request->town)) {
                $student->address =  $student->address."\n".$request->town;
            }

            $student->town = $request->town;
            $student->dob = $request->dob;
            $student->bc_num = $request->bc_num;
            $student->admission_date = $request->admission_date;
            $student->grade_id = $request->grade;
            $student->parent_name = $request->parent_name;
            $student->parent_nic = $request->parent_nic;
            $student->parent_contact = $request->parent_contact;
            $student->status = 'Active';

            if ($request->hasFile('photo')) {
                $image = $request->file('photo');
                $name = $student->index.".".$image->getClientOriginalExtension();
                $destinationPath = ('storage/photos/');
                $image->move($destinationPath, $name);
            }

            $student->save();
            return redirect('/students/');
        }

        return Redirect::back()->withInput();
    }
}
