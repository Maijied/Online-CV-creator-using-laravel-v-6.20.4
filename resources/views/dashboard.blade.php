@extends('layouts.app')

@section('pagetitle')
<a class="navbar-brand" href="javascript:;">Dashboard</a>
@endsection

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
               
                <div class="card card-stats">
                <a href="{{route('user-list')}}">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">supervised_user_circle</i>
                        </div>
                        <!-- Total Client  -->
                        
                        <p class="card-category">Applicant List</p>
                        <h3 class="card-title"> {{ $client}}
                            <!-- <small>GB</small> -->
                        </h3>

                    </div>
                    </a>  
                    <div class="card-footer">
                        <div class="stats">
                            <span class="material-icons" style="margin-top: -1px;">reorder</span>
                            <a href="{{route('user-list')}}">Browse list of applicants...</a>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection