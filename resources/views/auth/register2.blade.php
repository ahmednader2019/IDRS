<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title> Register </title>
@include('layouts.head')
<!-- Favicon -->
<link rel="shortcut icon" href="assets/images/favicon.ico" />

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
 register-->

<section class="height-100vh d-flex align-items-center page-section-ptb login" style="background-image: url(assets/images/login-bg.jpg);">
  <div class="container">
     <div class="row no-gutters">
       <div class="col-lg-4 offset-lg-1 col-md-6 login-fancy-bg bg parallax" style="background-image: url(assets/images/login-inner-bg.jpg);">
         <div class="login-fancy">
          {{-- <h2 class="text-white mb-20"> IDRS </h2>
          <p class="mb-20 text-white">Create tailor-cut websites with the exclusive multi-purpose responsive template along with powerful features.</p> --}}
          {{-- <ul class="list-unstyled pos-bot pb-30">
            <li class="list-inline-item"><a class="text-white" href="#"> Terms of Use</a> </li>
            <li class="list-inline-item"><a class="text-white" href="#"> Privacy Policy</a></li>
          </ul> --}}
         </div>
       </div>
       <div class="col-lg-4 col-md-6 bg-white">
        <div class="login-fancy pb-40 clearfix">
        <h3 class="mb-30">Sign up in IDRS </h3>
         <div class="row">

            <form method="POST" action="{{ route('register') }}">
                @csrf

             <div class="section-field mb-20 ">
               <label class="mb-10" for="name"> Name* </label>
                 <input id="name" class="web form-control" type="text"  name="name">
              </div>

            <div class="section-field mb-20">
                 <label class="mb-10" for="email">Email* </label>
                  <input type="email"  id="email" class="form-control" name="email">
             </div>

            <div class="section-field mb-20">
             <label class="mb-10" for="password">Password* </label>
               <input class="Password form-control" id="password" type="password"  name="password">
            </div>


            <div class="section-field mb-20">
                <label class="mb-10" for="password_confirmation">Confirm Password* </label>
                  <input class="Password form-control" id="password_confirmation" type="password" name="password_confirmation">
               </div>


            <div>
               <x-primary-button class="button">
                {{ __('Register') }}<i class="fa fa-check"></i>
              </x-primary-button>
            </div>

              {{-- <a href="#" class="button">
                <span>Signup</span>
                <i class="fa fa-check"></i>
             </a> --}}
             <p class="mt-20 mb-0"> Already have an account ? <a href="{{url('login')}}"> sign in here</a></p>
          </div>
        </div>
        </form>
      </div>
  </div>
</section>

<!--=================================
 register-->

</div>



<!--=================================
 jquery -->

 @include('layouts.footer-scripts')

</body>
</html>
