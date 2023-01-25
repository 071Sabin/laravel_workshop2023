@extends('master')
@section('content')



<h1>Login</h1>
  @if ($errors->any())
      <div class="alert alert-danger">
        
        @foreach ($errors->all() as $error)
          <div>{{ $error }}</div>
        @endforeach
          
      </div>
  @endif

  <form action="{{ route('site.login') }}" method="post">
    @csrf
    
    <label>Email</label>
    <input type="text" class="form-control mb-3" name="email" value="{{ old("email") }}">
    {{-- <div class="form-text text-danger">{{ $errors->first('email') }}</div> --}}

    <label>Password</label>
    <input type="password" class="form-control mb-3" name="password">
    {{-- <div class="form-text text-danger">{{ $errors->first('password') }}</div> --}}

    <hr>
    <button class="btn btn-primary" type="submit">Login</button>
  </form>

@endsection