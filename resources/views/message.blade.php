@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h3>Conversation Page</h3></div>
              
                <div class="card-body">
                    
                     @auth
                            <a href="{{url('/allMessage')}}"><h4>All Message</h4></a><br>
                            <a href="{{ url('/updateMessage') }}"><h4>Answer or Update Message</h4></a><br>
                            <a href="{{ url('/messageC') }}"><h4>Conversation between Customer to Customer</h4></a><br>
                    @endauth
                          
                      <a href="{{route('home')}}"><h5>Back</h5></a> 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection