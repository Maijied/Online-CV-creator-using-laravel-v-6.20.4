@extends('layouts.app')
@section('pagetitle')
<a class="navbar-brand" href="javascript:;">Applicant List</a>
@endsection
@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Users Table</h4>
              <p class="card-category"> This table contains user details</p>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table" id="table">
                  <thead class=" text-primary">
                    <th> ID </th>
                    <th> Name </th>
                    <th> Email </th>
                    <th> About </th>
                    <th> Address </th>
                    <th> Educational Backgroud </th>
                    <th> Experience </th>
                    <th> Projects </th>
                    <th> Carrer Choice </th>
                   
                  </thead>
                  <tbody>
                    @foreach ($client as $c)
                    <tr>
                      <td> {{ $c->id }} </td>
                      <td> {{ $c->name }} </td>
                      <td> {{ $c->about }} </td>
                      <td> {{ $c->address }} </td>
                      <td> {{ $c->educationalbackgroud }} </td>
                      <td> {{ $c->experience }} </td>
                      <td> {{ $c->projects }} </td>
                      <td> {{ $c->carrerchoice }} </td>
                      <td> {{ $c->email }} </td>
                      
                      
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
