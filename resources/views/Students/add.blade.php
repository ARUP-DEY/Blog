@extends('layouts.app')

@section('content')

    
<div class="row">
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
                <td>
                  <a href="{{route('students')}}"><button type="text" class="btn btn-primary"><i class="btn btn-primary"></i>Back</button></a>
                </td>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
    <form role="form" action="{{ route('addStudent')  }}" enctype="multipart/form-data" method="POST">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputUsers1">Name</label>
                  <input type="users" class="form-control" name="name" id="exampleInputUsers1" placeholder="Users">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email">
                </div>

                

                <div class="form-group">
                <label>Date of Birth:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" name="dob" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>

                <div class="form-group">
                  <label for="exampleInputh_Qualification1">H_Qualification</label>
                  <input type="text" class="form-control" name="h_Qualification" id="exampleInputh_Qualification1" placeholder="Enter Highst Qualification">
                </div>
                <div class="form-group">
                  <label for="exampleInputroll1">Roll No.</label>
                  <input type="text" class="form-control" name="roll" id="exampleInputroll1" placeholder="Enter Roll No.">
                </div>
                <div class="form-group">
                  <label for="exampleInputHclass1">Class</label>
                  <input type="text" class="form-control" name="class" id="exampleInputclass1" placeholder="Enter Class">
                </div>

                <div class="form-group">      
                    <label for="exampleInputHgender1">Genger:</label><br/>
                    <input type="checkbox" name="gender" id="exampleInputHgender1"  value="male"> Male 
                    <br/>
                    <input type="checkbox" name="gender" id="exampleInputHgender1" value="female" >Female <br/>             
                </div>

                <div class="form-group">
                    <label for="imageInput">Image</label>
                    <input  name="image" type="file" id="imageInput">
                    <img class="col-sm-6" id="preview"  src="">
                </div>

                <div class="form-group">
                  <label>Status</label>
                <label>
                  <input type="radio" name="status" value="1" class="minimal-red" checked>
                  Active
                </label>
                <label>
                  <input type="radio" name="status" value="0" class="minimal-red">
                  Inactive
                </label>
                
              </div>
                <!-- <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div> -->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
    </form>
          </div>
          

        </div>
      </div>



@endsection
