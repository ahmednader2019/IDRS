@extends('layouts.master')


@section('content')
   <div>
    <h2 style="text-align: center; color: rgb(97, 97, 115);"> Car Information </h2>
   </div>
    <div class="row">
        <div class="col-xl-12 mb-30">
          <div class="card card-statistics h-100">
            <div class="card-body">
        <div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
    <form action="{{URL('step3')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row">

            <div class="form-group col-md-12">
                <label for="car_number">Car license plate number</label>
                <input type="text" class="form-control" id="car_number"  name="car_number" value="{{ old('car_number', session('form_data2.car_number')) }}">
              </div>

        </div>

            <label class="mr-sm-2" for="inlineFormCustomSelect">Car Type</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="car_type">
                <option value="{{ old('car_type', session('form_data2.car_type')) }}">Choose Car Type</option>
                <option value="bmw">BMW</option>
                <option value="mercedes">Mercedes-Benz</option>
                <option value="hyundai">Hyundai</option>
                <option value="toyota">Toyota</option>
                <option value="audi">Audi</option>
                <option value="honda">Honda</option>
                <option value="ford">Ford</option>
                <option value="kia">Kia</option>
            </select>

         <br><br><br>


              <div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>

    <label class="mr-sm-2" for="inlineFormCustomSelect" for="car_owner"> Is There someone else Drive the car ?</label>
    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" id="car_owner" name="car_owner" onchange="this.value=='Yes' ? showTextBox() : hideTextBox()">
        <option value="{{old('car_owner', session('form_data2.car_owner')) }}">-- Please select --</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select>
    <div id="text-box" style="display: none;">
        <label for="feedback"> if yes , please specify : </label>
        <input type="text" class="form-control" name="car_owner_details" value="{{old('car_owner_details', session('form_data2.car_owner_details')) }}" id="inputEmail4"  autocomplete="off">
    </div>
    <div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
        <button type="submit" class="btn btn-primary" style="font-size: 15px; padding: 12px 26px; display: block; margin: 0 ; float: right; ">Next</button>
 </form>


 <a href="{{URL('Driver')}}">
    <button type="submit" class="btn btn-primary" style="font-size: 15px; padding: 12px 26px; display: block; margin: 0 ; float: left;">Previous</button>
</a>
</div>
</div>
@endsection


