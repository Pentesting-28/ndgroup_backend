@extends('layouts.template')
@section('seccion')

<nav aria-label="breadcrumb" >
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('inicio')}}">Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{route('list_show')}}">Listado</a></li>
    <li class="breadcrumb-item active" aria-current="page">Crear cuenta</li>
  </ol>
</nav>
<div class="row justify-content-center">
    <div class="modal-dialog-top col-md-6" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">{{ __('Register') }}</h5>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('register') }}" class="needs-validation"  novalidate >
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-2">
                             <a href="{{route('password.request') }}" class="btn btn-outline-success ml-3 ">Olvidaste tu contraseña?</a>                           
                            <button type="submit" class="btn btn-outline-primary"> {{ __('Register') }} </button> 
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-start">
                ndgroup.mx
            </div>
        </div>
    </div>
</div>

@endsection