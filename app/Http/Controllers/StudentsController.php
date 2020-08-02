<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\user;
use App\student;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=Student::all();
        return view('students.home')->withstudents($students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validate($request,['name'=>'required','rollno'=>'required','phno'=>'required','standard'=>'required','address'=>'required']);
        $student=new Student;
        $student->name=$request->input('name');
        $student->rollno=$request->input('rollno');
        $student->standard=$request->input('standard');
        $student->phno=$request->input('phno');
        $student->address=$request->input('address');
        $student->save();
        return redirect('/students')->withsuccess('New Student Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student=Student::find($id);
        return view('students.show')->withstudent($student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student=Student::find($id);
        return view('students.edit')->withstudent($student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,['name'=>'required','rollno'=>'required','phno'=>'required','standard'=>'required','address'=>'required']);
        $student=Student::find($id);
        $student->name=$request->input('name');
        $student->rollno=$request->input('rollno');
        $student->standard=$request->input('standard');
        $student->phno=$request->input('phno');
        $student->address=$request->input('address');
        $student->save();
        return redirect('/students')->withsuccess('Student Information Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student=Student::find($id);
        $student->delete();
        return redirect('/students')->withsuccess('Student Information Deleted');
    }
}
