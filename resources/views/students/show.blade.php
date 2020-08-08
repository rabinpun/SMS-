@extends('layouts.app')
@section('content')
    <h1>{{$student->name}}</h1><br>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Student Name</th>
            <th scope="col">Roll No.</th>
            <th scope="col">Standard</th>
            <th scope="col">Phone No.</th>
            <th scope="col">Address</th>
            <th scope="col">Paid Upto</th>
          </tr>
        </thead>
        <tbody>
                    <tr>
                        <th scope="row">{{$student->id}}</th>
                        <td>{{$student->name}}</td>
                        <td>{{$student->rollno}}</td>
                        <td>{{$student->standard}}</td>
                        <td>{{$student->phno}}</td>
                        <td>{{$student->address}}</td>
                        <td>{{$student->fee}}</td>

                    </tr>
                    
        </tbody>
      </table>
      <div class="d-flex justify-content-around">
        
          <h3 class="align-center">Student Photo</h3> <br>
          <h3 class="align-center">Result</h3>
      </div>
      <div class="d-flex justify-content-between">
        <img  class="result-student" src="/uploads/student_imgs/{{$student->std_img}}" alt="">
        <img class="result-student" src="/uploads/results/{{$student->result_img}}" alt="">
         
      </div>  
@endsection