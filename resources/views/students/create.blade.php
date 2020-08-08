@extends('layouts.app')
@section('content')
<form action="/students" method="post" enctype="multipart/form-data">
    @csrf
    <div class="d-flex justify-content-between">
    <div class="form-group">
      <label>Student Name</label>
      <input type="text" name="name" class="form-control" placeholder="Enter Student's Name">
    </div>
    
        <div class="form-group">
          <label >Student Photo</label>
          <input type="file" name="std_img" class="form-control-file" >
        </div>
    
        <div class="form-group">
            <label >Result</label>
            <input type="file" name="result_img" class="form-control-file">
          </div>
      
    
    </div>
    <div class="form-group">
        <label>Roll No.</label>
        <input type="text" name="rollno" class="form-control" placeholder="Enter Student's Roll No.">
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
        <input type="text" name="phno" class="form-control" placeholder="Enter Student's Phone No.">
      </div>
      <div class="form-group">
        <label>Student Address</label>
        <input type="text" name="address" class="form-control" placeholder="Enter Student's Address">
      </div>
      <div class="form-group">
        <label >Paid Upto</label>
        <select name="fee" class="form-control" >
          <option>Baisakh</option>
          <option>Jesth</option>
          <option>Ashar</option>
          <option>Shrawan</option>
          <option>Bhadra</option>
          <option>Ashwin</option>
          <option>Kartik</option>
          <option>Mangsir</option>
          <option>Push</option>
          <option>Magh</option>
          <option>Falgun</option>
          <option>Chaitra</option>
        </select>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection