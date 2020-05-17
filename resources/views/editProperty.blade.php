@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Edit Property Request</h2></div>&nbsp
              
                <div class="card-body">
		             <form method="post">
                        @csrf

                        <div class="form-group row">
                            <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('Id') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" readonly name="id" value="{{$property->id}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" readonly name="username" value="{{$property->username}}">

                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="propertyPrice" class="col-md-4 col-form-label text-md-right">{{ __('Property Price') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" readonly name="propertyPrice" value="{{$property->propertyPrice}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="propertyArea" class="col-md-4 col-form-label text-md-right">{{ __('Property Area') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" readonly name="propertyArea" value="{{$property->propertyArea}}">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Property Status') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{$property->status}}" required autocomplete="status" autofocus>

                                 @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4"> 
			               <input type="submit" name="submit" value="Save">
			             </div>
                       </div>
                       <a href="{{route('allProperty')}}"><h5>Back</h5></a>
		             </form>       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


