@extends('layouts.master')

@section('title')
Add Information
@endsection
@section('content')

@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif
@if (session()->has('error'))
    <div class="alert alert-danger" role="alert">
        {{ session('error') }}
    </div>
@endif

<div class="row">
    <div class="col-xl-12 mb-30">
      <div class="card card-statistics h-100">
        <div class="card-body">
          <div class="d-block" style="text-align:bottom">
          
                          <h3 class="card-title pb-0 border-0" style="color: #5398be ;"><span><i class="fa fa-user-circle fa-sm "></i></span>    Driver Informations </h3>
          </div>
    <div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <form action="{{URL('step2')}}" method="POST" autocomplete="on" enctype="multipart/form-data">
        @csrf
        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name ="name" value="{{ old('name', session('form_data1.name')) }}"  >
              </div>

          <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email"  name = "email" value="{{ old('email', session('form_data1.email')) }}" >
          </div>

          <div class="col-auto my-1">
            <label class="mr-sm-2" for="inlineFormCustomSelect">Gender</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="gender">
                    <option value="{{ old('gender', session('form_data1.gender')) }}">Choose Gender</option>
                    <option value="egyptian">Male</option>
                    <option value="american">Female</option>
            </select>
          </div>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <div class="form-group">
            <label for="phone_number">Phone Number </label>
            <input type="number" class="form-control" id="phone_number"  name="phone_number" value="{{ old('phone_number', session('form_data1.phone_number')) }}">
          </div>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


       <div class="form-group">
        <label for="city">City</label>
        <input type="text" name="city" class="form-control" id="city" value="{{ old('city', session('form_data1.city')) }}">
      </div>
         <div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

         </div>
         <div class="form-group">
            <label for="date"> Date Of Birth </label>
            <input type="text" class="form-control date-picker-default" id="date"  name="date" value="{{ !empty(session('form_data1.date')) ? session('form_data1.date') : old('date') }}" >
            @error('date')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group col-md-6">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" name="address" value="{{ old('address', session('form_data1.address')) }}">
        </div>

        </div>

            <label class="mr-sm-2" for="inlineFormCustomSelect">Nationality</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="nationality">
                <option value="{{ old('nationality', session('form_data1.nationality')) }}">Select a nationality</option>
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
            <input type="number" class="form-control" id="national_id" name="national_id" value="{{ old('national_id', session('form_data1.national_id')) }}" >

            <div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>

            <label for="emergency-number">Emergency Number </label>
            <input type="number" class="form-control" id="emergency_number" name="emergency_number" value="{{ old('emergency_number', session('form_data1.emergency_number')) }}">

            <div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>




              <div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
             <button type="submit" class="button" style=" float: right; ">
                <span>Next</span>
                <i class="fa fa-angle-right"></i>
             </button>

 </form>
         </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
