<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\Student;
use Illuminate\Support\Facades\Redirect;
use Session;

class GradeController extends Controller
{
    public function grades(){
        $grades = Grade::all()->sortBy('name');
        $students = Student::all();
        $data['students'] = $students;
        $data['grades'] = $grades;
        return view('grade/grades')->with($data);
    }

    public function new(){
        return view('grade/new');
    }

    Public function add(Request $request){
        $request->validate([
            'name'=>'required'
        ]);
        $grade_count = Grade::where('name',$request->name)->count();
        if ($grade_count>0) {
            Session::flash('danger','Grade/Class alredy exists');
            return Redirect::back()->withInput();
        }
        else {
            $grade = new Grade;
            $grade->name = $request->name;
            $grade->save();
            Session::flash('success','Grade/class created');
            return redirect('/grades/');
        }

    }

    public function remove(Request $request){
        $request->validate([
            'grade_id'=>'required'
        ]);
        $grade = Grade::findOrFail($request->input('grade_id'));
        if ($grade->students->count()>0) {
            Session::flash('danger','Students exist in the grade/class');
        }
        else {
            $grade->delete();
            Session::flash('success','Grade/class deleted');
        }

        return Redirect::back();
    }
}
