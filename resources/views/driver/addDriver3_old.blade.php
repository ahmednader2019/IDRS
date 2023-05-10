@extends('layouts.master')


@section('content')

    <h2 style="text-align: center; color: rgb(97, 97, 115);"> Medical Information  </h2>
    <div>
        &nbsp;&nbsp;
    </div>
    <div class="row">
        <div class="col-xl-12 mb-30">
          <div class="card card-statistics h-100">
            <div class="card-body">
        <div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
    <form  action="{{URL('step4')}}" method="POST" >
        @csrf
        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="inputEmail4"> Do you have a  pressure problem ?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pressure" id="exampleRadios1" value="yes" >
                    <label class="form-check-label" for="pressure">
                      Yes
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="pressure" id="exampleRadios2" value="no">
                    <label class="form-check-label" for="pressure">
                      No
                    </label>
                  </div>
           </div>
           <div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
           <div class="form-group col-md-6">
            <label for="inputEmail4"> Do you have Diabetes ?</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="diabetes" id="#exampleRadios1" value="yes" >
                <label class="form-check-label" for="diabetes">
                 Yes
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="diabetes" id="#exampleRadios2" value="no">
                <label class="form-check-label" for="diabetes">
                  No
                </label>
              </div>
       </div>
        </div>

        <label class="mr-sm-2" for="inlineFormCustomSelect">Blood Type</label>
        <select class="custom-select mr-sm-2" id="blood" name="blood" >
            <option value="">Choose Your blood Type</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="AB">AB</option>
            <option value="O">O</option>
        </select>

         <br><br><br>

         <label for="diseases"> Do you have any Chronic diseases ?</label>
         <br>
         <input type="radio" name="diseases" value="yes" onclick="showTextBox2('diseases')">Yes  &nbsp;&nbsp;
         <input type="radio" name="diseases" value="no" onclick="hideTextBox2('diseases')" >No
         <br><br>
         <div id="diseases-textbox" style="display:none;">
             <label for="diseases-details">If Yes, please specify:</label>
             <br>
             <textarea id="diseases-details" name="diseases_details" rows="4" cols="50"></textarea>
         </div>

         <br>

         <label for="surgeries">Have you had any surgeries before ?</label>
         <br>
         <input type="radio" name="surgeries" value="yes" onclick="showTextBox2('surgeries')">Yes  &nbsp;&nbsp;
         <input type="radio" name="surgeries" value="no" onclick="hideTextBox2('surgeries')" >No
         <br><br>
         <div id="surgeries-textbox" style="display:none;">
             <label for="surgeries-details">If Yes, please specify:</label>
             <br>
             <textarea id="surgeries-details" name="surgeries_details" rows="4" cols="50"></textarea>
         </div>

         <br>
    <a >
        <button type="submit" class="btn btn-primary" style="font-size: 15px; padding: 12px 26px; display: block; margin: 0 ; float: right; "> Next </button>
    </a>
</form>

<a href="{{URL('step2')}}">
    <button type="submit" class="btn btn-primary" style="font-size: 15px; padding: 12px 26px; display: block; margin: 0 ; float: left;">Previous</button>
</a>
</div>
</div>
@endsection


