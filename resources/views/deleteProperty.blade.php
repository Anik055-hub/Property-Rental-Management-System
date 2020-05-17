@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Delete Property !!!</h2></div>&nbsp
              
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
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" readonly name="username" value="{{$username}}">

                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="propertyPrice" class="col-md-4 col-form-label text-md-right">{{ __('Property Price') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" readonly name="propertyPrice" value="{{$propertyPrice}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="propertyArea" class="col-md-4 col-form-label text-md-right">{{ __('Property Area') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" readonly name="propertyArea" value="{{$propertyArea}}">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Property Status') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" readonly name="status" value="{{$status}}">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4"> 
			               <input type="hidden" name="id" value="{{$id}}">
			               <input type="submit" name="submit" value="Confirm">
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