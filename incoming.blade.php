<!-- Stored in resources/views/pages/index.blade.php -->

@extends('layouts.mainlayout')

@section('title', 'Dispatch')

@section('sidebar')

@section('content')
<div class="wrapper">
<div class="container">
<div class="row">
  @include('layouts.sidenav')
  

  <table class= "table table-bordered table-sm" style="width:70%">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">From</th>
            <th scope="col">Subject</th>
            <th scope="col">Dispatch No.</th>
            <th scope="col">Date</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td> <a href= "/incoming-detail">Tashi </a></td>
                <td>Transfer order</td>
                <td>5644</td>
                <td>20/8/2014</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Dorji</td>
                <td>Workshop</td>
                <td>908</td>
                <td>29/9/2019</td>
            </tr>

     {{-- @foreach($users as $user)
          <tr>
              <td> {{$user->id}} </td>
              <td> {{$user->name}} </td>
              <td> {{$user->last_name}} </td>
              <td> {{$user->email}} </td>
              <td> {{$user->phone}} </td>
              <td> {{$user->address}} </td>
          </tr>
         @endforeach
         --}} 
  </tbody>
</table>

  
@endsection