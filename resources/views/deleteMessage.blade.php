@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Delete Message !!!</h2></div>&nbsp
              
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
                            <label for="fromP" class="col-md-4 col-form-label text-md-right">{{ __('From the Person') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" readonly name="fromP" value="{{$fromP}}">

                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="toP" class="col-md-4 col-form-label text-md-right">{{ __('To Whom') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" readonly name="toP" value="{{$toP}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="msg" class="col-md-4 col-form-label text-md-right">{{ __('Message') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" readonly name="msg" value="{{$msg}}">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="msgDate" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" readonly name="msgDate" value="{{$msgDate}}">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4"> 
			               <input type="hidden" name="id" value="{{$id}}">
			               <input type="submit" name="submit" value="Confirm">
			             </div>
                       </div>
                       <a href="{{route('allMessage')}}"><h5>Back</h5></a>
		             </form>       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection