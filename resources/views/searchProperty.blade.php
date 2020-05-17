@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Property Details</h2></div>&nbsp
              
                <div class="card-body">
                        @csrf
	            <table border="2">
	            	<tr>
			         <td><h5>Id</h5></td>
			         <td><h6>{{$property->id}}</h6></td>
			       </tr>
			       <tr>
			         <td><h5>Username</h5></td>
			         <td><h6>{{$property->username}}</h6></td>
			       </tr>
			       <tr>
			         <td><h5>Property Price</h5></td>
			         <td><h6>{{$property->propertyPrice}}</h6></td>
			       </tr>
			       <tr>
			         <td><h5>Property Area</h5></td>
			         <td><h6>{{$property->propertyArea}}</h6></td>
			       </tr>
			       <tr>
			         <td><h5>Property Type</h5></td>
			         <td><h6>{{$property->propertyType}}</h6></td>
			       </tr>
			       <tr>
			         <td><h5>Property Style</h5></td>
			         <td><h6>{{$property->style}}</h6></td>
			       </tr>
			       <tr>
			         <td><h5>Total Bed</h5></td>
			         <td><h6>{{$property->bed}}</h6></td>
			       </tr>
			       <tr>
			         <td><h5>Total Bath</h5></td>
			         <td><h6>{{$property->bath}}</h6></td>
			       </tr>
			       <tr>
			         <td><h5>Total Feet</h5></td>
			         <td><h6>{{$property->feet}}</h6></td>
			       </tr>
			       <tr>
			         <td><h5>Title</h5></td>
			         <td><h6>{{$property->title}}</h6></td>
			       </tr>
			       <tr>
			         <td><h5>Floor</h5></td>
			         <td><h6>{{$property->floor}}</h6></td>
			       </tr>
			       <tr>
			         <td><h5>Description</h5></td>
			         <td><h6>{{$property->description}}</h6></td>
			       </tr>
			       <tr>
			         <td><h5>Property Status</h5></td>
			         <td><h6>{{$property->status}}</h6></td>
			       </tr>
			       <tr>
			         <td><h5>No of Clicks</h5></td>
			         <td><h6>{{$property->noOfClicks}}</h6></td>
			       </tr>
			       <tr>
			         <td><h5>Date</h5></td>
			         <td><h6>{{$property->date}}</h6></td>
			       </tr>
	           </table><br>
	           <a href="{{route('property')}}"><h5>Back</h5></a>
             </div>
          </div>
      </div>
   </div>
</div>
@endsection