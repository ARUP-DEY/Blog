@extends('layouts.app')

@section('content')

    
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <div class="box-footer">

                 <td>
                  <a href="{{route('students/add')}}"><button type="button" class="btn btn-primary"><i class="fa-plus-square"></i>Add New Student</button></a>
                  <!-- <a href="{{route('students/add')}}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Student</a> -->
                </td>


                
              </div>

              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>DOB</th>
                  <th>Roll No.</th>
                  <th>Highest Qualification.</th>
                  <th>Class</th>
                  
                  <th>Gender</th>
                  <th>Status</th>
                 <!--  <th>Reason</th> -->
                  <th>Action</th>
                </tr>
                @foreach($students as $student)
                <tr>
                  <td>{{ $student->id }}</td>
                  <td>{{ $student->name }}</td>
                  <td>{{ $student->email }}</td>
                  <td>{{ $student->dob }}</td>
                  <td>{{ $student->roll }}</td>
                  <td>{{ $student->roll }}</td>
                  <td>{{ $student->h_Qualification }}</td>                 
                  
                  <td>{{ $student->gender }}</td>
                  
                  <td>{{ $student->status }}</td>
                  <td>
                    <a href="{{ route('students/edit',$student->id)}}"><button type="button" class="btn btn-block btn-primary btn-sm"><i class="fa fa-fw fa-pencil-square-o"></i></button></a>

                    <!-- <td><a href="{{ route('students/edit',$student->id)}}"></abbr><button type="button" class="btn btn-block btn-primary btn-sm"><i class="fa fa-fw fa-pencil-square-o"></i></button></a>-->


                   <button type="button" class="btn btn-block btn-info btn-sm"><i class="fa fa-fw fa-eye"></i></button>
                    <button type="button" class="btn btn-block btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>
                    </button>

                  </td>
                </tr>
            @endforeach

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>



@endsection
