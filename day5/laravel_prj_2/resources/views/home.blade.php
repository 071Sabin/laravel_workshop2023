@extends('master')

@section('content')
    
    <article class="entry">

    @if( ! Auth::guard('user')->check())
    <h2 class="entry-title">
      Home Page
    </h2>
    <div class="entry-meta">
      Welcome to Home Page
    </div>
    @endif

  
    @if(Auth::guard('user')->check())
      <h2>Dashboard</h2>
      <div class="entry-meta">
        Welcome to VideoSite {{ Auth::guard('user')->user()->name }}
      </div>
    @endif
    
    <div>
      
    </div>

    <div class="entry-content">
      
    </div>

  </article>

@endsection