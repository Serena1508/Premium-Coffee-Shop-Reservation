@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">


                <div class="card-body ">



<div class="container-fluid ps-md-0">
  <div class="row g-0">
    <div class="col-md-6 d-none d-md-block">
    <img src="https://www.coffeeaddress.com/file/manual/CA_Home_Coffee_in_cafe@2x.png" class="img-fluid" style="min-height:100%;" />
    </div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-block align-items-center py-15 ">
        <div class="container">
          <div class="row">
            <div class="col-16col-md-12 col-lg-12 mx-auto">

              <!-- Sign In Form -->


            <div class="card pt-5">


              <div class="pt-4 ">
                  <img src="/images/logocoffee.jpg" class="  img-fluid rounded mx-auto d-block px-md-4"
                     />
            </div>

                <div class="card-body">
                    <h3 class="mb-5 text-2xl font-bold text-center text-gray-800">
                        Login Please !
                    </h3>
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
                            <div class="col-md-6 offset-md-2 block mt-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>

                            </div>
                            <label for="forget_password" class=" d-flex justify-content-end ">
                                    @if (Route::has('password.request'))
                                    <a class="underline text-sm text-blue-600 hover:text-blue-600" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                                </label>
                        </div>


                        <div class="row mb-4 mt-4">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn  btn-dark " style="width: 110%; height:34px">
                                    {{ __('Login') }}
                                </button>


                            </div>
                        </div>
                        <div class="flex flex-wrap font bold mb-5">
                            @if (Route::has('register'))
                            <p class="w-full text-xs text-center text-gray-700 my-8 sm:text-sm sm:my-16">
                                {{ __("Don't have an account?") }}
                                <a class="text-blue-800 hover:text-blue-400 no-underline hover:underline" href="{{ route('register') }}">
                                    {{ __('Register') }}
                                </a>
                            </p>
                            @endif
                        </div>

                    </form>
                </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
@endsection
