@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h3>Customer Page</h3></div>
              
                <div class="card-body">
                    
                     @auth
                            <a href="{{url('/allCustomer')}}"><h4>All Customer</h4></a><br>
                            <a href="{{ url('/feedback') }}"><h4>Feedback</h4></a><br>
                            <a href="{{ url('/featuredPost') }}"><h4>Featured Post</h4></a><br>
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
                <div class="card-header"><h3>Search Customer</h3></div>&nbsp
              
                <div class="card-body">
                   <form method="post">
                        @csrf
            
                     <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4"> 
                            <h5> Customer Name : <input type="text" name="username" >
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