@extends('layouts.master')
@section('css')
    <!--Internal   Notify -->
    <link href="{{ URL::asset('assets/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />
@section('title')
Users Permissions
@stop


@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">Users</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0"> /
                Users Permissions </span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')


@if (session()->has('Add'))
    <script>
        window.onload = function() {
            notif({
                msg: " permission added successfully ",
                type: "success"
            });
        }

    </script>
@endif

@if (session()->has('edit'))
    <script>
        window.onload = function() {
            notif({
                msg: " permission updated successfully ",
                type: "success"
            });
        }

    </script>
@endif

@if (session()->has('delete'))
    <script>
        window.onload = function() {
            notif({
                msg: " permission deleted successfully ",
                type: "error"
            });
        }

    </script>
@endif

<!-- row -->
<div class="col-xl-12">
    <div class="card">
        <div class="card-header pb-0">
            <div class="d-flex justify-content-between">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-right">
                        {{-- @can('اضافة صلاحية') --}}
                            <a class="btn btn-primary btn-sm" href="{{ route('roles.create') }}">Add</a>
                        {{-- @endcan --}}
                    </div>
                </div>
                <br>
            </div>

        </div>
<div class="row row-sm">

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mg-b-0 text-md-nowrap table-hover ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Process</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $key => $role)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        {{-- @can('عرض صلاحية') --}}
                                            <a class="btn btn-success btn-sm"
                                                href="{{ route('roles.show', $role->id) }}">Show</a>
                                        {{-- @endcan --}}

                                        {{-- @can('تعديل صلاحية') --}}
                                            <a class="btn btn-primary btn-sm"
                                                href="{{ route('roles.edit', $role->id) }}">Edit</a>
                                        {{-- @endcan --}}

                                        @if ($role->name !== 'owner')
                                            {{-- @can('حذف صلاحية') --}}
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy',
                                                $role->id], 'style' => 'display:inline']) !!}
                                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                                {!! Form::close() !!}
                                            {{-- @endcan --}}
                                        @endif


                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--/div-->
</div>
<!-- row closed -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection

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
@section('js')
<!--Internal  Notify js -->
<script src="{{ URL::asset('assets/plugins/notify/js/notifIt.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/notify/js/notifit-custom.js') }}"></script>
@endsection
