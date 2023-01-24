@extends('master')
@section('content')



<h1>Login</h1>
  <form action="{{ route('site.login') }}" method="post">
    @csrf
    <label>Email</label>
    <input type="text" class="form-control mb-3" name="email">
    <div class="form-text text-danger">{{ $errors->first('email') }}</div>

    <label>Password</label>
    <input type="password" class="form-control mb-3" name="password">
    <div class="form-text text-danger">{{ $errors->first('password') }}</div>

    <hr>
    <button class="btn btn-primary" type="submit">Login</button>
  </form>

@endsection