@extends('layouts.app')
@section('content')
<form action="/students/{{$student->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label>Student Name</label>
      <input type="text" name="name" class="form-control" value="{{$student->name}}">
    </div>
    <div class="form-group">
        <label>Roll No.</label>
        <input type="text" name="rollno" class="form-control" value="{{$student->rollno}}">
    </div>
    <div class="form-group">
        <label >Standard</label>
        <select name="standard" class="form-control" >
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
      <div class="form-group">
        <label>Student Phone No.</label>
        <input type="text" name="phno" class="form-control" value="{{$student->phno}}">
      </div>
      <div class="form-group">
        <label>Student Address</label>
        <input type="text" name="address" class="form-control" value="{{$student->address}}">
      </div>
      <input type="hidden" name="_method" value="PUT">
    <button type="submit" class="btn btn-primary">Submit</button>
  
@endsection