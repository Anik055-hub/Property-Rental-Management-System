@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Reply Message</h2></div>&nbsp
              
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
                                <input type="text" class="form-control @error('fromP') is-invalid @enderror" name="fromP" value="{{$fromP}}" required autocomplete="fromP" autofocus>

                                 @error('fromP')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="toP" class="col-md-4 col-form-label text-md-right">{{ __('To Whom') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('toP') is-invalid @enderror" name="toP" value="{{$toP}}" required autocomplete="toP" autofocus>

                                 @error('toP')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="msg" class="col-md-4 col-form-label text-md-right">{{ __('Message') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('msg') is-invalid @enderror" name="msg" value="{{$msg}}" required autocomplete="msg" autofocus>

                                 @error('msg')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="msgDate" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

                            <div class="col-md-6">
                                <input type="date" class="form-control @error('msgDate') is-invalid @enderror" name="msgDate" value="{{$msgDate}}" required autocomplete="msgDate" autofocus>

                                 @error('msgDate')
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
                       <a href="{{route('updateMessage')}}"><h5>Back</h5></a>
		             </form>       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


