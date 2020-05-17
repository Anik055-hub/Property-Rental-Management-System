@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Customer Background</h2></div>&nbsp
              
                <div class="card-body">
                        @csrf
	            <table border="2">
	            	<tr>
			         <td><h5>Id</h5></td>
			         <td><h6>{{$customer->id}}</h6></td>
			       </tr>
			       <tr>
			         <td><h5>Username</h5></td>
			         <td><h6>{{$customer->username}}</h6></td>
			       </tr>
			       <tr>
			         <td><h5>Name</h5></td>
			         <td><h6>{{$customer->name}}</h6></td>
			       </tr>
			       <tr>
			         <td><h5>Password</h5></td>
			         <td><h6>{{$customer->password}}</h6></td>
			       </tr>
			       <tr>
			         <td><h5>Type</h5></td>
			         <td><h6>{{$customer->type}}</h6></td>
			       </tr>
			       <tr>
			         <td><h5>Phone</h5></td>
			         <td><h6>{{$customer->phone}}</h6></td>
			       </tr>
			       <tr>
			         <td><h5>Email</h5></td>
			         <td><h6>{{$customer->email}}</h6></td>
			       </tr>
			       <tr>
			         <td><h5>Image</h5></td>
			         <td><h6>{{$customer->image}}</h6></td>
			       </tr>
			       <tr>
			         <td><h5>Active Post</h5></td>
			         <td><h6>{{$customer->activePost}}</h6></td>
			       </tr>
			       <tr>
			         <td><h5>Pending Post</h5></td>
			         <td><h6>{{$customer->pendingPost}}</h6></td>
			       </tr>
			       <tr>
			         <td><h5>Sold Post</h5></td>
			         <td><h6>{{$customer->soldPost}}</h6></td>
			       </tr>
			       <tr>
			         <td><h5>Total Post</h5></td>
			         <td><h6>{{$customer->totalPost}}</h6></td>
			       </tr>
	           </table><br>
	           <a href="{{route('customer')}}"><h5>Back</h5></a>
             </div>
          </div>
      </div>
   </div>
</div>
@endsection