
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
            <ul class="nav nav-pills nav-justified mb-2 flex-column flex-sm-row" id="pills-tab" role="tablist">
                <li class="nav-item flex-sm-fill" role="presentation">
                  <button class="nav-link active w-100" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Car</button>
                </li>
                <li class="nav-item flex-sm-fill" role="presentation">
                  <button class="nav-link w-100" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Health</button>
                </li>
                <li class="nav-item flex-sm-fill" role="presentation">
                  <button class="nav-link w-100" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">attachements</button>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                            <th>Additional Car owner</th>
                            <th>Car Number</th>
                            <th>Car Type</th>


                          </tr>
                          </thead>
                          @foreach ($car as $car)
                          <tbody>
                          <tr>
                            <td>{{$car->car_owner}}</td>
                            <td>{{$car->car_number}}</td>
                            <td>{{$car->car_type}}</td>

                          </tr>
                          </tbody>
                          @endforeach
                        </table>
                      </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"><div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Pressure </th>
                        <th>Diabetes</th>
                        <th>blood type</th>
                        <th>Diseases</th>
                        <th>Diseases-details</th>
                        <th>Surgeries</th>
                        <th>Surgeries-details</th>

                      </tr>
                      </thead>
                      @foreach($health as $health)
                      <tbody>
                      <tr>
                        <td>{{$health->pressure}}</td>
                        <td>{{$health->diabetes}}</td>
                        <td>{{$health->blood}}</td>
                        <td>{{$health->diseases}}</td>
                        <td>{{$health->diseases_details}}</td>
                        <td> {{$health->surgeries}}</td>
                        <td>{{$health->surgeries_details}}</td>
                      </tr>
                   </tbody>
                   @endforeach
                    </table>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Driver ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Process</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>{{$driver->id}}</td>
                                <td>Personal Photo</td>
                                {{-- {{ url('View_file') }}/{{ $invoices->invoice_number }}/{{ $attachment->file_name }} --}}
                                {{-- {{ url('download') }}/{{ $invoices->invoice_number }}/{{ $attachment->file_name }} --}}
                                <td><a type="button" class="btn btn-info"
                                    href="#"
                                   >&nbsp;
                                view</a>
                                 {{-- href="{{ route('file.download', ['id' => $driver->id, 'filename' => $attachments->filename1]) }}"
                                <a type ="button" class="btn btn-success"> --}}

                                    <a type ="button" class="btn btn-success"
                                    href="#"
                                   >&nbsp;
                                    Download</a>
                            </td>
                              </tr>
                              <tr>
                                <td>{{$driver->id}}</td>
                                <td>Driver Licence</td>
                                <td><a type="button" class="btn btn-info"
                                    href="#"
                                   >&nbsp;
                                view</a>
                                <a type ="button" class="btn btn-success"
                                href="#"
                               >&nbsp;
                                Download</a>
                            </td>
                              </tr>
                              <tr>
                                <td>{{$driver->id}}</td>
                                <td> Car Licence</td>
                                <td><a type="button" class="btn btn-info"
                                    href="#"
                                   >&nbsp;
                                view</a>
                                <a type ="button" class="btn btn-success"
                                href="#"
                               >&nbsp;
                                Download</a>
                            </td>
                              </tr>
                              <tr>


                            </tbody>
                          </table>
                  </div></div>
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
    <script>
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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>




</body>

</html>
