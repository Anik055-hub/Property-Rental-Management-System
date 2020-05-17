@extends('layouts/app')


@section('content'); 


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h3>Most Visited Property List</h3></div>&nbsp
              
                <div class="card-body">
                        @csrf
	            <table border="2">
		           <tr>
			         <th><h5>Id</h5></th>
			         <th><h5>Username</h5></th>
			         <th><h5>Property Price</h5></th>
			         <th><h5>Property Area</h5></th>
			         <th><h5>Property Type</h5></th>
			         <th><h5>Property Style</h5></th>
			         <th><h5>Total Bed</h5></th>
			         <th><h5>Toatl Bath</h5></th>
			         <th><h5>Total Feet</h5></th>
			         <th><h5>Title</h5></th>
			         <th><h5>Floor</h5></th>
			         <th><h5>Description</h5></th>
			         <th><h5>Status</h5></th>
			         <th><h5>No of clicks</h5></th>
			         <th><h5>Date</h5></th>
		           </tr>
		
		        @foreach($properties as $property)
		           <tr>
			         <td><h6>{{$property->id}}</h6></td>
			         <td><h6>{{$property->username}}</h6></td>
			         <td><h6>{{$property->propertyPrice}}</h6></td>
			         <td><h6>{{$property->propertyArea}}</h6></td>
			         <td><h6>{{$property->propertyType}}</h6></td>
			         <td><h6>{{$property->style}}</h6></td>
			         <td><h6>{{$property->bed}}</h6></td>
			         <td><h6>{{$property->bath}}</h6></td>
			         <td><h6>{{$property->feet}}</h6></td>
			         <td><h6>{{$property->title}}</h6></td>
			         <td><h6>{{$property->floor}}</h6></td>
			         <td><h6>{{$property->description}}</h6></td>
			         <td><h6>{{$property->status}}</h6></td>
			         <td><h6>{{$property->noOfClicks}}</h6></td>
			         <td><h6>{{$property->date}}</h6></td>
		           </tr>

		        @endforeach
	           </table><br>
	           <a href="{{route('property')}}"><h5>Back</h5></a>
             </div>
          </div>
      </div>
   </div>
</div>



  @endsection

