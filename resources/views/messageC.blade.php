@extends('layouts/app')


@section('content'); 


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h3>Conversation between Customer to Customer</h3></div>&nbsp
              
                <div class="card-body">
                        @csrf
	            <table border="2">
		           <tr>
			         <th><h5>Id</h5></th>
			         <th><h5>Message From</h5></th>
			         <th><h5>Message To</h5></th>
			         <th><h5>Message</h5></th>
			         <th><h5>Date</h5></th>
		           </tr>
		
		        @foreach($messages as $message)
		           <tr>
			         <td><h6>{{$message->id}}</h6></td>
			         <td><h6>{{$message->fromP}}</h6></td>
			         <td><h6>{{$message->toP}}</h6></td>
			         <td><h6>{{$message->msg}}</h6></td>
			         <td><h6>{{$message->msgDate}}</h6></td>
		           </tr>

		        @endforeach
	           </table><br>
	           <a href="{{route('message')}}"><h5>Back</h5></a>
             </div>
          </div>
      </div>
   </div>
</div>



  @endsection

