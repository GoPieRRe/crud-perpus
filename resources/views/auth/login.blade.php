@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<section class="h-100 gradient-form" style="background-image:url('img/bg.jpg'); background-size:cover;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black" style="background-color: transparent; color:azure">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
  
                  <div class="text-center">
                    <img src="{{ asset('img/logoperpus.png') }}"
                      style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1"><img width="300px" src="{{ asset('img/text.png') }}" alt=""></h4>
                  </div>
  
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <p style="color:white">Please login to your account</p>
  
                    <div class="form-outline mb-4">
                      <input type="email" id="form2Example11" name="email" class="form-control"
                        placeholder="email address" />
                    </div>
  
                    <div class="form-outline mb-4">
                      <input type="password" name="password" class="form-control" />
                    </div>
  
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log
                        in</button>
                        
                        @if (Route::has('password.request'))
                      <a class="text-muted" href="{{ route('password.request') }}">Forgot password?</a>
                      @endif
                    </div>
  
                  </form>
                    
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2" >
                <video loop="true" autoplay muted style="border-radius: 10px" class="mb-4 px-4" width="500px">
                  <source src="{{ asset('video/PROFIL.MP4') }}" type="video/MP4">
                </video>
                <div class="px-3 py-4 p-md-5 mx-md-4">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
