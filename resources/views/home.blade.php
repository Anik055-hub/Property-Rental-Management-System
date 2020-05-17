@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Home Page</h3></div>
              
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif 
                    
                     @auth
                            <a href="{{url('/profile/{id}')}}"><h4>Profile</h4></a><br>
                            <a href="{{ url('/customer') }}"><h4>Customer Details</h4></a><br>
                            <a href="{{ url('/property') }}"><h4>Property</h4></a><br>
                             <a href="{{ url('/message') }}"><h4>Conversation</h4></a><br>
                    @endauth
                        
                </div>
            </div>
        </div>
    </div>
</div>

@endsection