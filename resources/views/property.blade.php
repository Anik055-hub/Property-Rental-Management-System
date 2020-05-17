@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h3>Property Page</h3></div>
              
                <div class="card-body">
                    
                     @auth
                            <a href="{{ url('/allProperty') }}"><h4>All Property</h4></a><br>
                            <a href="{{ url('/activeProperty') }}"><h4>All Activated Property</h4></a><br>
                            <a href="{{ url('/rentProperty') }}"><h4>All Rented Property</h4></a><br>
                            <a href="{{ url('/mostVisitedProperty') }}"><h4>Most Visited Property</h4></a>
                    @endauth
                     
                </div>
            </div>
        </div>
    </div>
</div><br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h3>Search Property</h3></div>&nbsp
              
                <div class="card-body">
                   <form method="post">
                        @csrf
            
                     <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4"> 
                            <h5> Username : <input type="text" name="username" >
                              <input type="submit" name="submit" value="Search"></h5>
                           </div>
                       </div>
                   <a href="{{route('home')}}"><h5>Back</h5></a> 
                </form>       
             </div>
          </div>
      </div>
   </div>
</div>

@endsection