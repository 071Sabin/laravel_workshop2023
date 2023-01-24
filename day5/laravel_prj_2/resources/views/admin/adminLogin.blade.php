@extends('admin\master')

@section('content')

<h1>Login</h1>
  <form action="{{ route('admin.login') }}" method="post">
    @csrf

    <label>Email</label>
    <input type="text" class="form-control mb-3" name="email" value="{{ old('email') }}">
    <div class="form-text text-danger">{{ $errors->first('email') }}</div>

    <label>Password</label>
    <input type="password" class="form-control mb-3" name="password" value="{{ old('password') }}">
    <div class="form-text text-danger">{{ $errors->first('password') }}</div>

    <hr>
    <button class="btn btn-primary" type="submit">Login</button>

  </form>

@endsection