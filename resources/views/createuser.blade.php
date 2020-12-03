@extends('layouts.app')
@section('pagetitle')
<a class="navbar-brand" href="javascript:;">Application Form</a>
@endsection
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Create New Application</h4>
                        <p class="card-category">Enter Your Details</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('create-user-action')}}" method="POST" id="logForm">
                            {{ csrf_field() }}
                            <div class="row"> 
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Name</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">About</label>
                                        <input type="text" class="form-control" name="about">
                                    </div>
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Address</label>
                                        <input type="text" class="form-control" name="address">
                                    </div>
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Educational Backgroud</label>
                                        <input type="text" class="form-control" name="educationalbackgroud">
                                    </div>
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Experience</label>
                                        <input type="text" class="form-control" name="experience">
                                    </div>
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Projects</label>
                                        <input type="text" class="form-control" name="projects">
                                    </div>
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Carrer Choice</label>
                                        <input type="text" class="form-control" name="carrerchoice">
                                    </div>
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Email</label>
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary pull-right">Create New Application</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>
</div>

@endsection
