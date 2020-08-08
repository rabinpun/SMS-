<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\user;
use App\student;
use Image;

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
        $this->validate($request,['name'=>'required','rollno'=>'required','phno'=>'required','standard'=>'required','address'=>'required','fee'=>'required']);
        $student=new Student;
        if($request->hasFile('std_img'))
        {
            
            $std_img=$request->file('std_img');
            $filename=$std_img->getClientOriginalName().time().'.'.$std_img->getClientOriginalExtension();
            
            Image::make($std_img)->resize(300,300)->save(public_path('/uploads/student_imgs/').$filename);
            $student->std_img=$filename;
            
        
        }
        if($request->hasFile('result_img'))
        {
            $result_img=$request->file('result_img');
            $filenme=$result_img->getClientOriginalName().time().'.'.$result_img->getClientOriginalExtension();
            Image::make($result_img)->save(public_path('/uploads/results/').$filenme);
            $student->result_img=$filenme;
        }
        
        
        
        $student->name=$request->input('name');
        $student->rollno=$request->input('rollno');
        $student->standard=$request->input('standard');
        $student->phno=$request->input('phno');
        $student->address=$request->input('address');
        $student->fee=$request->input('fee');
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
        $this->validate($request,['name'=>'required','rollno'=>'required','phno'=>'required','standard'=>'required','address'=>'required','fee'=>'required']);
        $student=Student::find($id);
        if($request->hasFile('std_img'))
        {
            
            $std_img=$request->file('std_img');
            $filename=$std_img->getClientOriginalName().time().'.'.$std_img->getClientOriginalExtension();
            
            Image::make($std_img)->save(public_path('/uploads/student_imgs/').$filename);
            $student->std_img=$filename;
            
        
        }
        if($request->hasFile('result_img'))
        {
            $result_img=$request->file('result_img');
            $filenme=$result_img->getClientOriginalName().time().'.'.$result_img->getClientOriginalExtension();
            Image::make($result_img)->save(public_path('/uploads/results/').$filenme);
            $student->result_img=$filenme;
        }
        $student->name=$request->input('name');
        $student->rollno=$request->input('rollno');
        $student->standard=$request->input('standard');
        $student->phno=$request->input('phno');
        $student->address=$request->input('address');
        $student->fee=$request->input('fee');
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
