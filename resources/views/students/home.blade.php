@extends('layouts.app')
@section('content')
    <h1>Students</h1><br>
    <a class="btn btn-primary" href="/students/create">Create Student</a>
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
            @if(count($students)>0)
                @foreach ($students as $student)
                    <tr>
                        <th scope="row">{{$student->id}}</th>
                        <td><a href="/students/{{$student->id}}">{{$student->name}}</a></td>
                        <td>{{$student->rollno}}</td>
                        <td>{{$student->standard}}</td>
                        <td>{{$student->phno}}</td>
                        <td>{{$student->address}}</td>
                        <td><a class="btn btn-primary" href="/students/{{$student->id}}/edit">Edit</a></td>
                    <form action="/students/{{$student->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <td><button type="submit" class="btn btn-danger">Delete</button></td>
                    </form>
                    </tr>  
                @endforeach
            @else
                    <h1>No Students</h1>
            @endif
          
        </tbody>
      </table>
@endsection