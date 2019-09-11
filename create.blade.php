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
              <label class="col-sm-2" for="inputEmail4">Sent to:</label>
                <div class="col-sm-6">
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Select User">
                </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2" for="inputEmail4">Cc:</label>
                <div class="col-sm-6">
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Select User">
                </div>
            </div>
             
            <div class="form-group row"> 
              <label class="col-sm-2" for="inputSubject">Subject:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="inputSubject" placeholder="Subject">
                </div>
            </div>
        
            <div class="form-group row"> 
              <label class="col-sm-2" for="inputSubject">Attach Document:</label>
                <div class="col-sm-4">
                  <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </div>
        
            <div class="form-group row">  
              <label class="col-sm-2" for="inputSubject">Action Date:</label>
                <div class="col-sm-3">
                  <input type="date" class="form-control" id="inputSubject" placeholder="Action Date">
                </div>
            </div>

            <div class="form-group row">  
              <div class="col-sm-5">
                  <input type="checkbox" aria-label="Checkbox for following text input" placeholder="Important">
                  <label for="inputSubject">Important</label>
              </div>
            </div>
           
            <div class="form-group row">
              <div class="col-sm-5">
                <button type="button" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-secondary">Send</button> 
              </div> 
            </div>
            
            <div class="form-group row">
              <div class="col-sm-6">
                <a class="btn btn-success" href="create-notification" role="button">Click here to send notification</a>
              </div>
            </div>
          </form>
      </div>
  </div>
</div>
          
{{-- 
              <div class="form-group row">
                <label class="col-sm-2" for="inputPassword4">Password:</label>
              <div class="col-sm-6">
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Address</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="form-group">
              <label for="inputAddress2">Address 2</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity">
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip">
              </div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Check me out
                </label>
              </div>
            </div>
          <button type="submit" class="btn btn-primary">Sign in</button>
      </div>
  --}}
@endsection
