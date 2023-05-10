
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @include('layouts.head')
    {{-- <style>
    .nav-pills .nav-link {
      font-size: 0.9rem; /* or any desired font size */
      padding: 0.25rem 0.5rem; /* or any desired padding */
      height: 2rem; /* or any desired height */
      line-height: 1.5rem; /* or any desired line height */
    }
      </style> --}}
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

        @include('layouts.main-header')

        @include('layouts.main-sidebar')

        <!--=================================
 Main content -->
        <!-- main-content -->
        <div class="content-wrapper">

            <h2>Dashboard / Details </h2>
            <div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>

            <div class="col-xl-12 mb-30">
                <div class="card card-statistics h-100">
                  <div class="card-body">
                   <h5 class="card-title"> Tab Round</h5>
                      <div class="tab round">
                     <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active show" id="home-07-tab" data-toggle="tab" href="#home-07" role="tab" aria-controls="home-07" aria-selected="true"> <i class="fa fa-home"></i> Driver </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile-07-tab" data-toggle="tab" href="#profile-07" role="tab" aria-controls="profile-07" aria-selected="false"><i class="fa fa-user"></i> Car </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="portfolio-07-tab" data-toggle="tab" href="#portfolio-07" role="tab" aria-controls="portfolio-07" aria-selected="false"><i class="fa fa-picture-o"></i> Medical </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="contact-07-tab" data-toggle="tab" href="#contact-07" role="tab" aria-controls="contact-07" aria-selected="false"><i class="fa fa-check-square-o"></i> Attachements </a>
                        </li>
                      </ul>
                      <div class="tab-content">
                        <div class="tab-pane fade active show" id="home-07" role="tabpanel" aria-labelledby="home-07-tab">

                      </div>
                        <div class="tab-pane fade" id="profile-07" role="tabpanel" aria-labelledby="profile-07-tab">
                                {{-- <img height="200px" width="200px" src="{{asset('storage/images/personal/' .$attachement->personal_photo )}}" > --}}
                        </div>
                        <div class="tab-pane fade" id="portfolio-07" role="tabpanel" aria-labelledby="portfolio-07-tab">
                          <p>Benjamin Franklin, inventor, statesman, writer, publisher and economist relates in his autobiography that early in his life he decided to focus on arriving at moral perfection. He made a list of 13 virtues, assigning a page to each. Under each virtue he wrote a summary that gave it fuller meaning. Then he practiced each one for a certain length of time. To make these virtues a habit, Franklin can up with a method to grade himself on his daily actions.</p>
                        </div>
                        <div class="tab-pane fade" id="contact-07" role="tabpanel" aria-labelledby="contact-07-tab">
                            <div class="row">
                                {{-- <div class="col-xl-4 mb-30">
                                    <div class="card card-statistics h-100">
                                      <div class="p-4 text-center bg-danger text-white">
                                         {{-- <h5 class="mb-20 text-white">Sarah Lisbon</h5> --}}
                                           <!-- action group -->
                                          {{-- <div class="btn-group info-drop">
                                            <button type="button" class="dropdown-toggle-split text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-more"></i></button>
                                            <div class="dropdown-menu">
                                              <a class="dropdown-item" href="#"><i class="text-primary ti-files"></i> Add task</a>
                                              <a class="dropdown-item" href="#"><i class="text-dark ti-pencil-alt"></i> Edit Profile</a>
                                              <a class="dropdown-item" href="#"><i class="text-success ti-user"></i> View Profile</a>
                                              <a class="dropdown-item" href="#"><i class="text-secondary ti-info"></i> Contact Info</a>
                                            </div>
                                          </div> --}}
                                          {{-- <img height="200px" width="200px" src="{{asset('storage/images/personal/' .$attachement->personal_photo )}}" > --}}
                                          {{-- @foreach ( $attachments as $attachement  )

                                         <img class="img-fluid w-25 rounded-circle " src="{{asset('storage/images/personal/' .$attachement->personal_photo )}}" alt="">
                                          @endforeach
                                         <p class="mt-20 text-white">Carol J. Stephens 1635 Franklin Street Montgomery, AL 36104</p>
                                          <div class="social-icons color-hover clearfix mt-20"> --}}
                                            {{-- <ul>
                                              <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                                              <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                              <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                              <li class="social-github"><a href="#"><i class="fa fa-github"></i></a></li>
                                              <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                                              <li class="social-instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul> --}}
                                        {{-- </div>
                                      </div>
                                      <div class="card-body text-center">
                                         <div class="row">
                                            <div class="col-6 col-sm-4 xs-mb-10 md-mt-0 mt-10">
                                               <b>Following</b>
                                               <h4 class="mt-10">2,655 </h4>
                                            </div>
                                            <div class="col-6 col-sm-4 xs-mb-10 md-mt-0 mt-10">
                                              <b>Followers </b>
                                               <h4 class="mt-10">54k</h4>
                                            </div>
                                            <div class="col-12 col-sm-4 md-mt-0 mt-10">
                                              <b>Post</b>
                                               <h4 class="mt-10">602</h4>
                                            </div>
                                          </div>
                                       </div>
                                    </div>
                                  </div> --}}

                                  <div class="col-xl-4 mb-30">
                                    <div class="card card-statistics h-100">
                                        @foreach ( $attachments as $attachement  )
                                        <img  width="360px" height= "320px" src="{{asset('storage/images/personal/' .$attachement->personal_photo )}}" >
                                         @endforeach
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                         <div style="display: flex; justify-content: center; align-items: center;">
                                            <p>
                                              <h4>Personal Photo</h4>
                                            </p>
                                          </div>
                                        {{-- <div> <p> <h4>Personal Photo </h4></p> </div> --}}
                                    </div>

                                  </div>

                                  <div class="col-xl-4 mb-30">
                                    <div class="card card-statistics h-100">
                                        @foreach ( $attachments as $attachement  )
                                        <img  width="360px" height= "320px" src="{{asset('storage/images/driverLicences/' .$attachement->driver_licence )}}" >
                                         @endforeach
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                         <div style="display: flex; justify-content: center; align-items: center;">
                                            <p>
                                              <h4>Driver Licence </h4>
                                            </p>
                                          </div>
                                    </div>
                                  </div>


                                  <div class="col-xl-4 mb-30">
                                    <div class="card card-statistics h-100">
                                        @foreach ( $attachments as $attachement  )
                                        <img  width="360px" height= "320px" src="{{asset('storage/images/carsLicences/' .$attachement->car_licence )}}" >
                                         @endforeach
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                         <div style="display: flex; justify-content: center; align-items: center;">
                                            <p>
                                              <h4>Car Licence </h4>
                                            </p>
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
            <!--=================================
 wrapper -->

            <!--=================================
 footer -->

            @include('layouts.footer')
        </div><!-- main content wrapper end-->
    </div>
    </div>
    </div>

    <!--=================================
 footer -->

    @include('layouts.footer-scripts')
    {{-- <script>
        const tabItems = document.querySelectorAll('.nav-link');
    const tabContentItems = document.querySelectorAll('.tab-pane');

    function selectItem(e) {
    removeBorder();
    removeShow();
    // Add border to current tab
    this.classList.add('active');
    // Grab content item from DOM
    const tabContentItem = document.querySelector(`#${this.getAttribute('data-bs-target').substring(1)}`);
    // Add show class
    tabContentItem.classList.add('show', 'active');
    }

    function removeBorder() {
    tabItems.forEach(item => {
    item.classList.remove('active');
    });
    }

    function removeShow() {
    tabContentItems.forEach(item => {
    item.classList.remove('show', 'active');
    });
    }

    // Listen for tab click
    tabItems.forEach(item => {
    item.addEventListener('click', selectItem);
    });

    </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script> --}}




</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @include('layouts.head')
    {{-- <style>
    .nav-pills .nav-link {
      font-size: 0.9rem; /* or any desired font size */
      padding: 0.25rem 0.5rem; /* or any desired padding */
      height: 2rem; /* or any desired height */
      line-height: 1.5rem; /* or any desired line height */
    }
      </style> --}}
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

        @include('layouts.main-header')

        @include('layouts.main-sidebar')

        <!--=================================
 Main content -->
        <!-- main-content -->
        <div class="content-wrapper">

            <h2>Dashboard / Details </h2>
            <div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>

            <div class="col-xl-12 mb-30">
                <div class="card card-statistics h-100">
                  <div class="card-body">
                   <h5 class="card-title"> Tab Round</h5>
                      <div class="tab round">
                     <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active show" id="home-07-tab" data-toggle="tab" href="#home-07" role="tab" aria-controls="home-07" aria-selected="true"> <i class="fa fa-home"></i> Driver </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile-07-tab" data-toggle="tab" href="#profile-07" role="tab" aria-controls="profile-07" aria-selected="false"><i class="fa fa-user"></i> Car </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="portfolio-07-tab" data-toggle="tab" href="#portfolio-07" role="tab" aria-controls="portfolio-07" aria-selected="false"><i class="fa fa-picture-o"></i> Medical </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="contact-07-tab" data-toggle="tab" href="#contact-07" role="tab" aria-controls="contact-07" aria-selected="false"><i class="fa fa-check-square-o"></i> Attachements </a>
                        </li>
                      </ul>
                      <div class="tab-content">
                        <div class="tab-pane fade active show" id="home-07" role="tabpanel" aria-labelledby="home-07-tab">

                      </div>
                        <div class="tab-pane fade" id="profile-07" role="tabpanel" aria-labelledby="profile-07-tab">
                                {{-- <img height="200px" width="200px" src="{{asset('storage/images/personal/' .$attachement->personal_photo )}}" > --}}
                        </div>
                        <div class="tab-pane fade" id="portfolio-07" role="tabpanel" aria-labelledby="portfolio-07-tab">
                          <p>Benjamin Franklin, inventor, statesman, writer, publisher and economist relates in his autobiography that early in his life he decided to focus on arriving at moral perfection. He made a list of 13 virtues, assigning a page to each. Under each virtue he wrote a summary that gave it fuller meaning. Then he practiced each one for a certain length of time. To make these virtues a habit, Franklin can up with a method to grade himself on his daily actions.</p>
                        </div>
                        <div class="tab-pane fade" id="contact-07" role="tabpanel" aria-labelledby="contact-07-tab">
                            <div class="row">
                                {{-- <div class="col-xl-4 mb-30">
                                    <div class="card card-statistics h-100">
                                      <div class="p-4 text-center bg-danger text-white">
                                         {{-- <h5 class="mb-20 text-white">Sarah Lisbon</h5> --}}
                                           <!-- action group -->
                                          {{-- <div class="btn-group info-drop">
                                            <button type="button" class="dropdown-toggle-split text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-more"></i></button>
                                            <div class="dropdown-menu">
                                              <a class="dropdown-item" href="#"><i class="text-primary ti-files"></i> Add task</a>
                                              <a class="dropdown-item" href="#"><i class="text-dark ti-pencil-alt"></i> Edit Profile</a>
                                              <a class="dropdown-item" href="#"><i class="text-success ti-user"></i> View Profile</a>
                                              <a class="dropdown-item" href="#"><i class="text-secondary ti-info"></i> Contact Info</a>
                                            </div>
                                          </div> --}}
                                          {{-- <img height="200px" width="200px" src="{{asset('storage/images/personal/' .$attachement->personal_photo )}}" > --}}
                                          {{-- @foreach ( $attachments as $attachement  )

                                         <img class="img-fluid w-25 rounded-circle " src="{{asset('storage/images/personal/' .$attachement->personal_photo )}}" alt="">
                                          @endforeach
                                         <p class="mt-20 text-white">Carol J. Stephens 1635 Franklin Street Montgomery, AL 36104</p>
                                          <div class="social-icons color-hover clearfix mt-20"> --}}
                                            {{-- <ul>
                                              <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                                              <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                              <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                              <li class="social-github"><a href="#"><i class="fa fa-github"></i></a></li>
                                              <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                                              <li class="social-instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul> --}}
                                        {{-- </div>
                                      </div>
                                      <div class="card-body text-center">
                                         <div class="row">
                                            <div class="col-6 col-sm-4 xs-mb-10 md-mt-0 mt-10">
                                               <b>Following</b>
                                               <h4 class="mt-10">2,655 </h4>
                                            </div>
                                            <div class="col-6 col-sm-4 xs-mb-10 md-mt-0 mt-10">
                                              <b>Followers </b>
                                               <h4 class="mt-10">54k</h4>
                                            </div>
                                            <div class="col-12 col-sm-4 md-mt-0 mt-10">
                                              <b>Post</b>
                                               <h4 class="mt-10">602</h4>
                                            </div>
                                          </div>
                                       </div>
                                    </div>
                                  </div> --}}

                                  <div class="col-xl-4 mb-30">
                                    <div class="card card-statistics h-100">
                                        @foreach ( $attachments as $attachement  )
                                        <img  width="360px" height= "320px" src="{{asset('storage/images/personal/' .$attachement->personal_photo )}}" >
                                         @endforeach
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                         <div style="display: flex; justify-content: center; align-items: center;">
                                            <p>
                                              <h4>Personal Photo</h4>
                                            </p>
                                          </div>
                                        {{-- <div> <p> <h4>Personal Photo </h4></p> </div> --}}
                                    </div>

                                  </div>

                                  <div class="col-xl-4 mb-30">
                                    <div class="card card-statistics h-100">
                                        @foreach ( $attachments as $attachement  )
                                        <img  width="360px" height= "320px" src="{{asset('storage/images/driverLicences/' .$attachement->driver_licence )}}" >
                                         @endforeach
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                         <div style="display: flex; justify-content: center; align-items: center;">
                                            <p>
                                              <h4>Driver Licence </h4>
                                            </p>
                                          </div>
                                    </div>
                                  </div>


                                  <div class="col-xl-4 mb-30">
                                    <div class="card card-statistics h-100">
                                        @foreach ( $attachments as $attachement  )
                                        <img  width="360px" height= "320px" src="{{asset('storage/images/carsLicences/' .$attachement->car_licence )}}" >
                                         @endforeach
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                         <div style="display: flex; justify-content: center; align-items: center;">
                                            <p>
                                              <h4>Car Licence </h4>
                                            </p>
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
            <!--=================================
 wrapper -->

            <!--=================================
 footer -->

            @include('layouts.footer')
        </div><!-- main content wrapper end-->
    </div>
    </div>
    </div>

    <!--=================================
 footer -->

    @include('layouts.footer-scripts')
    {{-- <script>
        const tabItems = document.querySelectorAll('.nav-link');
    const tabContentItems = document.querySelectorAll('.tab-pane');

    function selectItem(e) {
    removeBorder();
    removeShow();
    // Add border to current tab
    this.classList.add('active');
    // Grab content item from DOM
    const tabContentItem = document.querySelector(`#${this.getAttribute('data-bs-target').substring(1)}`);
    // Add show class
    tabContentItem.classList.add('show', 'active');
    }

    function removeBorder() {
    tabItems.forEach(item => {
    item.classList.remove('active');
    });
    }

    function removeShow() {
    tabContentItems.forEach(item => {
    item.classList.remove('show', 'active');
    });
    }

    // Listen for tab click
    tabItems.forEach(item => {
    item.addEventListener('click', selectItem);
    });

    </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script> --}}




</body>

</html>
