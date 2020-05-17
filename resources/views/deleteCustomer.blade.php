@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Delete Customer !!!</h2></div>&nbsp
              
                <div class="card-body">
		             <form method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('Id') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" readonly name="id" value="{{$id}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" readonly name="username" value="{{$username}}">

                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" readonly name="name" value="{{$name}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" readonly name="type" value="{{$type}}">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" readonly name="email" value="{{$email}}">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4"> 
			               <input type="hidden" name="id" value="{{$id}}">
			               <input type="submit" name="submit" value="Confirm">
			             </div>
                       </div>
                       <a href="{{route('allCustomer')}}"><h5>Back</h5></a>
		             </form>       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection