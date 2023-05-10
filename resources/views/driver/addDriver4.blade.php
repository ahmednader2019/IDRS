@extends('layouts.master')


@section('content')

    <h3 style="text-align: center; color: rgb(97, 97, 115);">  Attachements </h3>
    <div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div class="row">
        <div class="col-xl-12 mb-30">
          <div class="card card-statistics h-100">
            <div class="card-body">
        <div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
    <form method="POST" action="{{ URL('save') }}" enctype="multipart/form-data">
        @csrf
        <div style="margin-bottom: 20px;">
            <label for="filename1" style="font-weight: bold; font-size: 18px;">Personal Photo:</label>
            <input type="file" name="personal_photo" id="personal_photo" style="margin-left: 10px;" >
          </div>
          <div style="margin-bottom: 20px;">
            <label for="filename2" style="font-weight: bold; font-size: 18px;">Driver License:</label>
            <input type="file" name="driver_licence" id="driver_licence" style="margin-left: 10px;">
          </div>
          <div style="margin-bottom: 20px;">
            <label for="filename3" style="font-weight: bold; font-size: 18px;">Car License:</label>
            <input type="file" name="car_licence" id="car_licence" style="margin-left: 10px;" >
          </div>
        <button type="submit" class="btn btn-primary" style="font-size: 15px; padding: 12px 26px; display: block; margin: 0 ; float: right;">Submit</button>

    </form>

 <a href="{{URL('step3')}}">
    <button type="submit" class="btn btn-primary" style="font-size: 15px; padding: 12px 26px; display: block; margin: 0 ; float: left;">Previous</button>
</a>
</div>
</div>
@endsection
