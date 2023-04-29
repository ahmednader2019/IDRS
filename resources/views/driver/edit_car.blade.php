@extends('layouts.master')


@section('content')

    <h2 style="text-align: center; color: blue;"> Car Information </h2>
    <div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <form action="{{URL('update_car')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <input type="hidden" name="id" value="{{ $car->id }}">

            <div class="form-group col-md-6">
                <label for="car_number">Car license plate number</label>
                <input type="text" class="form-control" id="car_number"  name="car_number" value="{{ $car->car_number}}">
              </div>

        </div>

            <label class="mr-sm-2" for="inlineFormCustomSelect">Car Type</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="car_type">
                <option >{{ $car->car_type }}</option>
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
        <option >  {{$car->car_owner}} </option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select>
    <div id="text-box" style="display: none;">
        <label for="feedback"> if yes , please specify : </label>
        <input type="text" class="form-control" name="car_owner_details" value="{{$car->car_owner_details}}" id="inputEmail4"  autocomplete="off">
    </div>
    <div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>

    <button type="submit" class="btn btn-outline-warning btn-md" style="font-size: 15px; padding: 12px 26px; display: block; margin: 0 auto;">Update</button>

    {{-- <button type="submit" class="btn btn-primary" style="font-size: 15px; padding: 12px 26px; display: block; margin: 0 ; float: right; ">Update</button> --}}
 </form>

</div>
</div>
@endsection
