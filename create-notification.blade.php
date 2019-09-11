<!-- Stored in resources/views/pages/index.blade.php -->

@extends('layouts.mainlayout')

@section('title', 'Dispatch')

@section('sidebar')

@section('content')
<div class="wrapper">
  <div class="container">
    <div class="row">
      @include('layouts.sidenav')
      <div class="col text-center">
        <br>
          <form method="POST">
            @csrf
            <div class="form-group row"> 
              <label class="col-sm-2" for="inputDispatchNo">Dispatch No:</label>
                <div class="col-sm-5">
                  <input type="email" class="form-control" id="inputDispatchNo" placeholder="Dispatch No">
                </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2" for="inputDepartment">Department</label>
                <div class="col-sm-5">
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Select Department">
                </div>
            </div>
             
            <div class="form-group row"> 
              <label class="col-sm-2" for="inputSubject">Subject:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="inputSubject" placeholder="Subject">
                </div>
            </div>
        
            <div class="form-group row"> 
              <label class="col-sm-2" for="inputSubject">Attach Notification:</label>
                <div class="col-sm-4">
                  <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </div>

            <div class="form-group row">  
              <div class="col-sm-3">
                <button type="button" class="btn btn-primary">Send</button>
              </div>
            </div>

          </form>
      </div>
    </div>
  </div>
</div>
@endsection
