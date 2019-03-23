@extends('main')
@section('style')
	<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection
@section('content')

<div class="signup-form">	
	<form action="/login" method="POST">
		{{ csrf_field() }}
		<h2>Log In</h2>
		
        
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
				<input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-lock"></i></span>
				<input type="password" class="form-control" name="password" placeholder="Password" required="required">
			</div>
        </div>
		       
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg">Log In</button>
        </div>
    </form>
	<div class="text-center">Dont have an account? <a href="/register">Sign Up here</a>.</div>
</div>    

    @include('partials._errors')

@endsection