<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        {{-- <meta http-equiv="refresh" content="3"> --}}
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
        .badge-success {
            font-size: 1.2rem;
            padding: 0.6rem 0.9rem; /* increase padding to 0.3rem top/bottom and 0.6rem left/right */
            /* background-color: #160b0c; set background color to red */
            }

            #map { height: 300px;  width: 1210px}
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

            <div class="row">
                <div class="col-xl-12 mb-30">
                  <div class="card card-statistics h-100">
                    <div class="card-body">
                     <div class="d-block d-md-flex justify-content-between">
                        <div class="d-block">
                          <h5 class="card-title pb-0 border-0">Data Local</h5>
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
                              <th> Driver Age </th>
                              <th>Current Status</th>
                            </tr>
                          </thead>

                          @foreach($driver as $driver)
                          @if($driver->status == 'done')
                          <tbody>
                            <tr>
                              <td>{{$driver->id}}</td>
                              <td>{{$driver->name}}</td>
                              <td>{{$driver->age}}</td>
                              <td><label id ="my-label" class="badge badge-success">{{$driver->status}}</td>
                              {{-- <td><label class="badge badge-success">Approved</label></td> --}}
                              {{-- <td><a href="#"  onclick="updateCoords()" class="btn btn-outline-warning btn-sm">Show Location</a></td> --}}
                              {{-- <td><a href="#" class="btn btn-outline-success btn-sm"><i class="fa fa-send"></i> Send Sms </a></td> --}}
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
            <div>
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
  // Get the input field and table
var searchInput = document.querySelector('#searchInput');
var table = document.querySelector('#driver-table');

// Add an event listener to the search input field
searchInput.addEventListener('input', function() {
  // Get the search term from the input field and convert to lowercase
  var searchTerm = searchInput.value.toLowerCase();

  // Loop through all the rows in the table
  for (var i = 0; i < table.rows.length; i++) {
    var row = table.rows[i];
    var foundMatch = false;

    // Loop through all the cells in the row
    for (var j = 0; j < row.cells.length; j++) {
      var cell = row.cells[j];

      // Check if the cell text content contains the search term
      if (cell.textContent.toLowerCase().indexOf(searchTerm) > -1) {
        foundMatch = true;
        break;
      }
    }

    // Show or hide the row based on whether it matches the search term
    if (foundMatch) {
      row.style.display = '';
    } else {
      row.style.display = 'none';
    }
  }
});
</script>


</body>

</html>
