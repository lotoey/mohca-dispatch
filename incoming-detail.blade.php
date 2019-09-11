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
                    <input type="text" class="form-control" id="inputDispatchNo" placeholder="DispatchNo">
                </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2" for="inputFrom">From:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputFrom" placeholder="auto-display">
                </div>
            </div>

            <div class="form-group row"> 
              <label class="col-sm-2" for="inputEmail4">To:</label>
                <div class="col-sm-5">
                  <input type="email" class="form-control" id="inputEmail4" placeholder="auto-display">
                </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2" for="inputEmail4">Cc:</label>
                <div class="col-sm-5">
                  <input type="email" class="form-control" id="inputEmail4" placeholder="auto-display">
                </div>
            </div>

              <div class="form-group row"> 
                <label class="col-sm-2" for="inputSubject">Subject:</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputSubject" placeholder="Subject">
                </div>
              </div>

              <div class="form-group row"> 
                <div class="col-sm-3"> 
                  <img src="storage/app/public/images/l.jpg" alt="Responsive" class="img-thumbnail" >
                </div>
              </div>

            <div class="form-group row">
              <label class="col-sm-2" for="inputMarkTo">Mark to</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="inputMarkTo" placeholder="Mark to user">
                </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2" for="inputComment">Comment</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="inputComment" placeholder="Comment">
                </div>
            </div>

            <div class="form-group row">  
              <div class="col-sm-3">    
                <button type="submit" class="btn btn-primary">Marked</button> 
              </div>
            </div>  
        </form>
      </div>
    </div>  
  </div>
</div>
@endsection
