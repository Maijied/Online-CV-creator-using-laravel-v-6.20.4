@extends('layouts.auth')

@section('authcontent')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Client Login</h4>
                        <p class="card-category">Enter tour details below to continue</p>
                    </div>
                    <div class="card-body">
                        <form action="{{url('post-login')}}" method="POST" id="logForm">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Email</label>
                                        <input type="email" class="form-control" id="inputEmailAddress" name="email">
                                        @if ($errors->has('email'))
												  <span class="error">{{ $errors->first('email') }}</span>
												@endif 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Password</label>
                                        <input type="password" class="form-control" id="inputPassword" name="password">
                                        @if ($errors->has('password'))
												  <span class="error">{{ $errors->first('password') }}</span>
												@endif
                                    </div>
                                </div>
                            </div>
                            <p class="mt-2">Don't have an account? <a href="{{route('register')}}">Register here</a></p>
                            <button type="submit" class="btn btn-primary pull-right">Login</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
</div>
@endsection
