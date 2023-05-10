<!DOCTYPE html>
<html lang="en" autocomplete="off">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title> log in </title>
@include('layouts.head')


</head>

<body>
 <div class="wrapper">

<!--=================================
 preloader -->

<div id="pre-loader">
    <img src="assets/images/pre-loader/loader-01.svg" alt="">
</div>

<!--=================================
 preloader -->

 <!--=================================
 login-->
 {{-- style="background-image: url(images//login-bg.jpg);" --}}
<section class="height-100vh d-flex align-items-center page-section-ptb login" style="background-image: url(assets/images/login-bg.jpg);" >
  <div class="container">
     <div class="row justify-content-center no-gutters vertical-align">
       <div class="col-lg-4 col-md-6 login-fancy-bg bg" style="background-image: url(assets/images/login-inner-bg.jpg);">
         <div class="login-fancy">
          {{-- <h2 class="text-white mb-20"> IDRS </h2> --}}
          {{-- <p class="mb-20 text-white">Create tailor-cut websites with the exclusive multi-purpose responsive template along with powerful features.</p> --}}
         </div>
       </div>
       <div class="col-lg-4 col-md-6 bg-white">
        <div class="login-fancy pb-40 clearfix">

            {{-- <x-guest-layout>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-primary-button class="ml-3">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </form>
            </x-guest-layout>  --}}


    <form method="POST" action="{{ route('login') }}" >
        @csrf
        <h3 class="mb-30">Sign In To IDRS </h3>

        <div class="section-field mb-20">
            <label class="mb-10" for="email">Email* </label>
             <input type="email"  id="email" class="form-control" name="email">
        </div>

        <div class="section-field mb-20">
            <label class="mb-10" for="password">Password* </label>
              <input class="Password form-control" id="password" type="password"  name="password">
           </div>

         {{-- <div class="section-field mb-20">
            <label for="email" :value="__('email')" />

            <input id="email" class="web form-control" type="email" name="email" placeholder="email"  />

            <x-input-error :messages="$errors->get('email')" class="mt-2" />

            </div> --}}

            {{-- <div class="section-field mb-20">
                <label for="password" :value="__('Password')" />
               <input id="Password" class="Password form-control" type="password" placeholder="Password" name="password" >
               <x-input-error :messages="$errors->get('password')" class="mt-2" />

            </div> --}}

            {{-- <div class="section-field">
              <div class="remember-checkbox mb-30">
                 <input type="checkbox" class="form-control" name="two" id="two" />
                 <label for="two"> Remember me</label>
                 <a href="password-recovery.html" class="float-right">Forgot Password?</a>
                </div>
              </div>
              <div> --}}
                <x-primary-button class="button">
                    {{ __('Log in') }} <i class="fa fa-check"></i>
                  </x-primary-button>
              {{-- </div> --}}

              {{-- <a href ="##" type="submit" class="button">
                <span>Log in</span>
                <i class="fa fa-check"></i>
             </a> --}}
             <p class="mt-20 mb-0">Don't have an account? <a href="{{url('register')}}"> Create one here</a></p>
          </div>
        </div>
        </form>

      </div>
  </div>
</section>


<!--=================================
 login-->

</div>



<!--=================================
 jquery -->

<!-- jquery -->


@include('layouts.footer-scripts')


</body>
</html>
