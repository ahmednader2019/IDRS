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
{{-- @if (session()->has('errors'))
    <div class="alert alert-danger" role="alert">
        {{ session('errors') }}
    </div>
@endif --}}

{{-- @error('name')
<div class="alert alert-danger mt-1 mb-1">{{ "name is empty" }}</div>
@enderror --}}
{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
<div>
    <h2 style="text-align: center; color: rgb(8, 8, 12);"> Driver Information </h2>
</div>
<div class="row">
    <div class="col-xl-12 mb-30">
      <div class="card card-statistics h-100">
        <div class="card-body">
    <div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <form action="{{URL('step2')}}" method="POST" autocomplete="on" enctype="multipart/form-data">
        @csrf
        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input type="text" class="@error('name') is-invalid @enderror form-control" id="name" name ="name" value="{{ !empty(session('form_data1.name')) ? session('form_data1.name') : old('name') }}"  >
                @error('name')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>

          <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" class="@error('email') is-invalid @enderror form-control" id="email"  name = "email" value="{{ !empty(session('form_data1.email')) ? session('form_data1.email') : old('email') }}">
            @error('email')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>

          <div class="col-auto my-1">
            <label class="mr-sm-2" for="inlineFormCustomSelect">Gender</label>
            <select class="custom-select mr-sm-2 " id="inlineFormCustomSelect" name="gender" >
                    <option value="{{ !empty(session('form_data1.gender')) ? session('form_data1.gender') : old('gender') }}" >Choose Gender</option>
                    <option value="egyptian">Male</option>
                    <option value="american">Female</option>
            </select>
            @error('gender')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
          </div>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <div class="form-group">
            <label for="phone_number">Phone Number </label>
            <input type="number" class="@error('phone_number') is-invalid @enderror form-control" id="phone_number"  name="phone_number" value="{{ !empty(session('form_data1.phone_number')) ? session('form_data1.phone_number') : old('phone_number') }} ">
            @error('phone_number')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


       <div class="form-group">
        <label for="city">City</label>
        <input type="text" name="city" class="@error('city') is-invalid @enderror form-control" id="city" value="{{ !empty(session('form_data1.city')) ? session('form_data1.city') : old('city') }} " >
        @error('city')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
    </div>
         <div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

         </div>


         {{-- <div class="card card-statistics mb-30">
            <div class="card-body datepicker-form">
              <h5 class="card-title">Birth Date</h5>
              <div class="form-group mb-0">
                 <input type="date" class="form-control date-picker-default" value="Select Date">
              </div>
            </div>
          </div> --}}

      <div class="form-group">
        <label for="date"> Date Of Birth </label>
        <input type="text" class="form-control date-picker-default" id="date"  name="date" value="{{ !empty(session('form_data1.date')) ? session('form_data1.date') : old('date') }}" >
        @error('date')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
    </div>

        <div class="form-group col-md-6">
          <label for="address">Address</label>
          <input type="text" class="@error('address') is-invalid @enderror form-control" id="address" name="address" value="{{ !empty(session('form_data1.address')) ? session('form_data1.address') : old('address') }}" >
          @error('address')
          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
          @enderror
        </div>

        </div>

            <label class="mr-sm-2" for="inlineFormCustomSelect">Nationality</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="nationality" >
                <option >{{ !empty(session('form_data1.nationality')) ? session('form_data1.nationality') : old('nationality') }}  </option>
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
            @error('nationality')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
         <br><br><br>


            <label for="national_id">National-ID </label>
            <input type="number" class="@error('national_id') is-invalid @enderror form-control" id="national_id" name="national_id" value="{{ !empty(session('form_data1.national_id')) ? session('form_data1.national_id') : old('national_id') }}">
            @error('national_id')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            <div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>

            <label for="emergency-number">Emergency Number </label>
            <input type="number" class="@error('emergency_number') is-invalid @enderror form-control" id="emergency_number" name="emergency_number" value="{{ !empty(session('form_data1.emergency_number')) ? session('form_data1.emergency_number') : old('emergency_number') }}">
            @error('emergency_number')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            <div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>




              <div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            <button type="submit" class="btn btn-primary" style="font-size: 15px; padding: 12px 26px; display: block; margin: 0 ; float: right; ">Next</button>
 </form>
         </div>
        </div>
    </div>
    {{-- </div>
</div>
</div>
</div> --}}
@endsection



