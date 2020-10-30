@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style=" background-color: #033c73 !important;  color: #FFFFFF !important;">
                    Inicio de Sesi&oacute;n
                </div>

                <div class="card-body">

                    <div class="col-12">
                         <div class="d-flex justify-content-center">
                            <img src="{{ asset('img/logo.svg') }}" alt="" width="350" height="200">
                        </div>
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group d-flex justify-content-center ">

                            <div class="col-md-6">
                                  <label for="email" class="col-form-label text-md-right">{{ __('Usuario') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group d-flex justify-content-center">


                            <div class="col-md-6">
                                 <label for="password" class="col-form-label text-md-right">{{ __('Contraseña') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-3">
                                <button type="submit" class="btn btn-primary" style="background-color: #033c73 !important;  color: #FFFFFF !important;">
                                    {{ __('Iniciar Sesión') }}
                                </button>

                              {{--   @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}                               

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
