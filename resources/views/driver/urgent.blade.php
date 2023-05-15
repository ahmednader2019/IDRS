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
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
    integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
    crossorigin=""/>

    <style>
         h4 {
        font-size: 24px;
        text-align: center;
        margin: 0;
        padding: 20px;
        border: 2px solid #333;
        border-radius: 10px;
        background-color: #f0f0f0;
      }
      #my-label {
        font-size: 1.1rem; /* increase font size to 1.2rem */
        }
        .badge-danger {
            font-size: 1.2rem;
            padding: 0.6rem 0.9rem; /* increase padding to 0.3rem top/bottom and 0.6rem left/right */
            /* background-color: #160b0c; set background color to red */
            }
            #map { height: 300px}
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
    crossorigin=""></script>

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

     <div style="display:none;">
        {{$latitude = 50.32323}}
        {{$longitude = 30.132323}}
     </div>


            <div class="row">
                <div class="col-xl-12 mb-30">
                  <div class="card card-statistics h-100">
                    <div class="card-body">
                     <div class="d-block d-md-flex justify-content-between">
                        <div class="d-block">
                          <h5 class="card-title pb-0 border-0"><span><i class="fa fa-car fa-sm " style="color:#dc3545"></i></span> Urgent Cars </h5>
                        </div>
                        <div class="d-block d-md-flex clearfix sm-mt-20">
                           <div class="widget-search ml-0 clearfix">
                            <i class="fa fa-search"></i>
                            <input type="search" class="form-control" placeholder="Search....">
                          </div>
                         </div>
                       </div>
                       <div class="table-responsive mt-15">
                        <table id="driver-table" class="table center-aligned-table mb-0">
                          <thead>
                            <tr class="text-dark">
                              <th>Driver ID </th>
                              <th>Driver Name</th>
                              <th>Current Status</th>
                              {{-- <th>latitude</th> --}}
                              {{-- <td>longitude</td> --}}
                              <th></th>
                              <th></th>
                            </tr>
                          </thead>

                          @foreach($driver as $driver)
                          @if($driver->status == 'danger')
                          <tbody>
                            <tr>
                              <td>{{$driver->id}}</td>
                              <td>{{$driver->name}}</td>
                              <td><label id = "my-label"class="badge badge-danger">{{$driver->status}}</td>
                              {{-- <td>{{$latitude = $driver->latitude}}</td> --}}
                              {{-- <td>{{$longitude = $driver->longitude}}</td> --}}
                              {{-- <td><label class="badge badge-success">Approved</label></td> --}}
                              <td><a href="#"  onclick="updateCoords()" class="btn btn-outline-warning btn-sm">Show Location</a></td>
                              <td><a href="#" class="btn btn-outline-success btn-sm"><i class="fa fa-send"></i> Send Sms </a></td>
                            </tr>
                          </tbody>
                          @endif
                          @endforeach
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 mb-30">
                  <div class="card card-statistics h-100">
                    <div class="card-body">
                      <div>
                        <div class="d-block d-md-flex justify-content-between">
                         <div class="d-block">
                          <h5 class="card-title pb-0 border-0"><span><i class="fa fa-crosshairs fa-sm fa-spin " style="color:#dc3545"></i></span> Driver's Current  loccation {{-- {{$address}} --}} </h5>
                         </div>
                        </div>
                        <div>
                           {{-- {{$address}} --}}
                          <div id="map"> </div>
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

<script>
var lat = @json($latitude);
var long = @json($longitude);
var map = L.map('map').setView([lat, long], 13);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    minZoom:6,
    maxZoom:17,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);


navigator.geolocation.watchPosition(success, error);

let marker , circle , zoomed;
function success(pos) {

const lat = pos.coords.latitude;
const lng = pos.coords.longitude;
const accuracy = pos.coords.accuracy; // Accuracy in metres

  if(marker){
      map.removeLayer(marker);
      map.removeLayer(circle);

  }

   marker = L.marker([lat,lng]).addTo(map);
   circle = L.circle([lat, lng] ,{ radius : accuracy}).addTo(map);

   if (!zoomed) {
        zoomed = map.fitBounds(circle.getBounds());
    }
    // Set zoom to boundaries of accuracy circle

    map.setView([lat, lng]);
    // Set map focus to current user position
//   map.fitBounds(circle.getBounds());
}

function error(err) {

if (err.code === 1) {
    alert("Please allow geolocation access");
    // Runs if user refuses access
} else {
    alert("Cannot get current location");
    // Runs if there was a technical problem.
}

}

// update
function updateCoords() {
    // Update the values of lat and long variables
     lat = @json($latitude);
     long = @json($longitude);

    // Update the map view with new coordinates
    map.setView([lat, long], 13);

    // Remove existing marker and circle from the map
    if(marker){
        map.removeLayer(marker);
        map.removeLayer(circle);
    }

    // Add new marker and circle to the map
    marker = L.marker([lat, long]).addTo(map);
    circle = L.circle([lat, long], { radius : 100 }).addTo(map);
  }

  // Call the geolocation API to get the current position
  navigator.geolocation.watchPosition(success, error);

  </script>

<script>
// Set the latitude and longitude
var lat = 60.507023; // replace with your latitude
var lng = -0.127812; // replace with your longitude

// Make a request to the Nominatim API
var url = 'https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=' + lat + '&lon=' + lng;
$.ajax({
  url: url,
  dataType: 'json',
  success: function(data) {
    // Extract the city name from the response
    var city = data.address.city;
    console.log('sss :', city);
  },
  error: function(xhr, status, error) {
    console.log('Error:', error);
  }
});

</script>

</body>

</html>
