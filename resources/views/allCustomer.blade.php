@extends('layouts/app')


@section('content'); 


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h3>Customer List</h3></div>&nbsp
              
                <div class="card-body">
                        @csrf
	            <table border="2">
		           <tr>
			         <th><h5>Id</h5></th>
			         <th><h5>Username</h5></th>
			         <th><h5>Name</h5></th>
			         <th><h5>Password</h5></th>
			         <th><h5>Type</h5></th>
			         <th><h5>Phone</h5></th>
			         <th><h5>Email</h5></th>
			         <th><h5>Image</h5></th>
			         <th><h5>Active Post</h5></th>
			         <th><h5>Pending Post</h5></th>
			         <th><h5>Sold Posts</h5></th>
			         <th><h5>Total Posts</h5></th>
			         <th><h5>Action</h5></th>
		           </tr>
		
		        @foreach($customers as $customer)
		           <tr>
			         <td><h6>{{$customer['id']}}</h6></td>
			         <td><h6>{{$customer['username']}}</h6></td>
			         <td><h6>{{$customer['name']}}</h6></td>
			         <td><h6>{{$customer['password']}}</h6></td>
			         <td><h6>{{$customer['type']}}</h6></td>
			         <td><h6>{{$customer['phone']}}</h6></td>
			         <td><h6>{{$customer['email']}}</h6></td>
			         <td><h6>{{$customer['image']}}</h6></td>
			         <td><h6>{{$customer['activePost']}}</h6></td>
			         <td><h6>{{$customer['pendingPost']}}</h6></td>
			         <td><h6>{{$customer['soldPost']}}</h6></td>
			         <td><h6>{{$customer['totalPost']}}</h6></td>
			         <td> 
				        <a href="{{route('deleteCustomer', $customer['id'])}}">Delete</a> 
			         </td>
		           </tr>

		        @endforeach
	           </table><br>
	           <a href="{{route('customer')}}"><h5>Back</h5></a>
             </div>
          </div>
      </div>
   </div>
</div>



  @endsection

