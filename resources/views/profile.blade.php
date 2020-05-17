@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Profile</h2></div>&nbsp
              
                <div class="card-body">
                        @csrf
	            <table border="2">
		           <tr>
			         <td><h5>Name</h5></td>
			         <td><h6>{{$user->name}}</h6></td>
			       </tr>
			       <tr>
			         <td><h5>Password</h5></td>
			         <td><h6>{{$user->password}}</h6></td>
			       </tr>
			       <tr>
			         <td><h5>Email</h5></td>
			         <td><h6>{{$user->email}}</h6></td>
			       </tr>
			       <tr>
			         <td><h5>Action</h5></td>
			          <td>
				          <a href="{{route('editProfile',$user['id'])}}"><h5>Edit</h5></a>  
			         </td>
		           </tr>
	           </table><br>
	           <a href="{{route('home')}}"><h5>Back</h5></a>
             </div>
          </div>
      </div>
   </div>
</div>
@endsection