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
                    </tr>  
        </tbody>
      </table>
@endsection