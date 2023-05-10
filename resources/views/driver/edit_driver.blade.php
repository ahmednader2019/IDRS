@extends('layouts.master')

@section('css')
<style>
    .btn:hover {
        background-color: #ffc107;
      }
</style>

@endsection
@section('content')

    @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
  @endif
  <div class="row">
    <div class="col-xl-12 mb-30">
      <div class="card card-statistics h-100">
        <div class="card-body">
          <div class="d-block">
                          <h3 class="card-title pb-0 border-0" style="color: #5398be ;">Driver Informations </h3>
          </div>
    <div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <form action="{{URL('update_driver')}}" method="POST" autocomplete="on" enctype="multipart/form-data">
        @csrf
        <div class="form-row">

            <div class="form-group col-md-6">
                <input type="hidden" name="id" value="{{ $driver->id }}">

                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name ="name" value="{{$driver->name}}"  >
              </div>

          <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email"  name = "email" value="{{$driver->email}}" >
          </div>

          <div class="col-auto my-1">
            <label class="mr-sm-2" for="inlineFormCustomSelect">Gender</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="gender">
                    <option >{{$driver->gender}}</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
            </select>
          </div>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <div class="form-group">
            <label for="phone_number">Phone Number </label>
            <input type="number" class="form-control" id="phone_number"  name="phone_number" value="{{$driver->phone_number}}">
          </div>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


       <div class="form-group">
        <label for="city">City</label>
        <input type="text" name="city" class="form-control" id="city" value="{{$driver->city}}">
      </div>
         <div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

         </div>
      <div class="form-group">
        <label for="date"> Date Of Birth </label>
        <input type="date" class="form-control" id="date"  name="date_of_birth" value="{{$driver->date_of_birth }}">
      </div>

        <div class="form-group col-md-6">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" name="address" value="{{$driver->address }}">
        </div>

        </div>

            <label class="mr-sm-2" for="inlineFormCustomSelect">Nationality</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="nationality">
                <option >{{$driver->nationality }}</option>
                <option value="egyptian">Egyptian</option>
                <option value="american">American</option>
                <option value="british">British</option>
                <option value="chinese">Chinese</option>
                <option value="french">French</option>
                <option value="german">German</option>
                <option value="indian">Indian</option>
                <option value="italian">Italian</option>
                <option value="japanese">Japanese</option>
                <option value="korean">Korean</option>
                <option value="mexican">Mexican</option>
                <option value="russian">Russian</option>
                <option value="spanish">Spanish</option>
            </select>

         <br><br><br>


            <label for="national_id">National-ID </label>
            <input type="number" class="form-control" id="national_id" name="national_id" value="{{$driver->national_id }}" >

            <div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>

            <label for="emergency-number">Emergency Number </label>
            <input type="number" class="form-control" id="emergency_number" name="emergency_number" value="{{ $driver->emergency_number }}">

            <div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>




              <div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            <button type="submit" class="btn btn-outline-warning btn-md" style="font-size: 15px; padding: 12px 26px; display: block; margin: 0 auto;">Update</button>

            {{-- <button type="submit" class="btn btn-primary" style="font-size: 15px; padding: 12px 26px; display: block; margin: 0 ; float: right; "> Update</button> --}}

 </form>

</div>
      </div>
    </div>
</div>
</div>

@endsection
