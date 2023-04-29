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
            #map { height: 300px;  width: 1210px}
    </style>
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



            <div class="row">
                <div class="col-xl-12 mb-30">
                  <div class="card card-statistics h-100">
                    <div class="card-body">
                     <div class="d-block d-md-flex justify-content-between">
                        <div class="d-block">
                          <h5 class="card-title pb-0 border-0">Data Local</h5>
                        </div>
                        <div class="d-block d-md-flex clearfix sm-mt-20">
                           <div class="clearfix">
                             <div class="box">
                              <select class="fancyselect sm-mb-20 mr-20">
                                <option value="1">Some option</option>
                                <option value="2">Another option</option>
                                <option value="3">A option</option>
                                <option value="4">Potato</option>
                              </select>
                            </div>
                          </div>
                           <div class="widget-search ml-0 clearfix">
                            <i class="fa fa-search"></i>
                            <input type="search" class="form-control" placeholder="Search....">
                          </div>
                         </div>
                       </div>
                       <div class="table-responsive mt-15">
                        <table class="table center-aligned-table mb-0">
                          <thead>
                            <tr class="text-dark">
                              <th>Driver ID </th>
                              <th>Driver Name</th>
                              <th>Purchased On</th>
                              <th>Location</th>
                              <th>Payment Status</th>
                              <th></th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>034</td>
                              <td>Iphone 7</td>
                              <td>12 May 2017</td>
                              <td>Dispatched</td>
                              <td>Credit card</td>
                              <td><label class="badge badge-success">Approved</label></td>
                              <td><a href="#" class="btn btn-outline-success btn-sm">View Order</a></td>
                              <td><a href="#" class="btn btn-outline-warning btn-sm">Cancel</a></td>
                            </tr>
                            <tr>
                              <td>035</td>
                              <td>Galaxy S8</td>
                              <td>15 May 2017</td>
                              <td>Dispatched</td>
                              <td>Internet banking</td>
                              <td><label class="badge badge-warning">Pending</label></td>
                              <td><a href="#" class="btn btn-outline-success btn-sm">View Order</a></td>
                              <td><a href="#" class="btn btn-outline-warning btn-sm">Cancel</a></td>
                            </tr>
                            <tr>
                              <td>036</td>
                              <td>Amazon Echo</td>
                              <td>17 May 2017</td>
                              <td>Dispatched</td>
                              <td>Credit card</td>
                              <td><label class="badge badge-danger">rejected</label></td>
                              <td><a href="#" class="btn btn-outline-success btn-sm">View Order</a></td>
                              <td><a href="#" class="btn btn-outline-warning btn-sm">Cancel</a></td>
                            </tr>

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
            </div>


            <div>
                <h4> user loccation </h4>
                <div id="map"></div>
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
var map = L.map('map').setView([31.205753, 29.924526], 13);

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
  </script>
</body>

</html>
