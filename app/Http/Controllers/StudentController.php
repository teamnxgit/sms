<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Redirect;
use Session;
use Symfony\Contracts\Service\Attribute\Required;

class StudentController extends Controller{
    public function students(Request $request){
        return view('student.students');
    }

    public function new(Request $request){
        return view('student.new');
    }

    public function add(Request $request){
        /*
        $request->validate([
            'index'=>'required',
            'full_name'=>'required',
            'dob'=>'required',
            'bc_num'=>'required',
            'admission_date'=>'required',
            'grade'=>'required',
            'parent_name'=>'required'
        ]);
            */

        $student = Student::find($request->index);
        if (isset($student)) {
            Session::flash('danger','Index number already exist!');
        }
        else {
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
            $student->grade = $request->grade;
            $student->parent_name = $request->parent_name;
            $student->parent_nic = $request->parent_nic;
            $student->parent_contact = $request->parent_contact;
            $student->status = 'Active';

            $student->save();
        }
        //return Redirect::back();
    }
}
