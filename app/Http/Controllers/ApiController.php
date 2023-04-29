<?php

namespace App\Http\Controllers;

use App\Http\Resources\carResource;
use App\Http\Resources\driverResource;
use App\Http\Resources\healthResource;
use App\Http\Resources\locationResource;
use App\Models\Api;
use App\Models\Car;
use App\Models\DriverInf;
use App\Models\Health;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{

    use ApiResponseTrait ;


               /// Show data of one user by ID
    public function show($id)
    {

        $driver =DriverInf::find($id);
        $car = Car::find($id);
        $health = Health::find($id);

        if($driver){
            return $this->apiResponse([new driverResource($driver) , new carResource($car) , new carResource($health)] , 'Data Retrieved Successfully' , 200 );
        }
        return $this->apiResponse(null , 'The user is not Found ' , 404 );

    }


        // store driver inf  => API
    public function store_driver(Request $request)
    {
           $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'phone_number' => 'required',
            'city' => 'required',
            'address' => 'required',
            'date_of_birth' => 'required',
            'nationality' => 'required',
            'national_id' => 'required',
            'emergency_number' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->apiResponse(null , $validator->errors(), 400 );

        }


        $driver= DriverInf::create($request->all());

        if($driver){
            return $this->apiResponse(new driverResource($driver) , 'Driver Inf Inserted Successfully ' , 201 );
        }
        return $this->apiResponse(null , 'The Driver information did not saved ! ' , 400 );
    }



     //  store car inf  => API
public function store_car(Request $request)
{
    $validator = Validator::make($request->all(), [
        'driver_id' => 'required',
        'car_number' => 'required',
        'car_type' => 'required',
    ]);

    if ($validator->fails()) {
        return $this->apiResponse(null , $validator->errors(), 400 );

    }


    $car= Car::create($request->all());

    if($car){
        return $this->apiResponse(new carResource($car) , 'Car Inf  Inserted Successfully ' , 201 );
    }
    return $this->apiResponse(null , 'The Car information did not saved ! ' , 400 );

}



    // store health inf => API
public function store_health(Request $request)
{
    $validator = Validator::make($request->all(), [
        'driver_id' => 'required',
        'pressure' => 'required',
        'diabetes' => 'required',
        'blood' => 'required',
        'diseases' => 'required',
        'surgeries' => 'required',
    ]);

    if ($validator->fails()) {
        return $this->apiResponse(null , $validator->errors(), 400 );
    }


    $health= Health::create($request->all());

    if($health){
        return $this->apiResponse(new healthResource($health) , 'health Inf Inserted Successfully ' , 201 );
    }
    return $this->apiResponse(null , 'The health information did not saved ! ' , 400 );
}


//  store attachements

public function store_attachments(Request $request)
{
    $validator = Validator::make($request->all(), [
        'driver_id' => 'required',
        'filename1' => 'required',
        'filename2' => 'required',
        'filename3' => 'required',
    ]);

    if ($validator->fails()) {
        return $this->apiResponse(null , $validator->errors(), 400 );
    }


    $photo = new Photo();
    $photo->driver_id = $request->driver_id;
       // personal photos
     if ($request->hasFile('filename1')) {

         $destination_path = 'public/images/personal';
         $personal = $request->file('filename1');
         $image_name = $personal->getClientOriginalName();
         $path = $request->file('filename1')->storeAs($destination_path,$image_name);

         $photo->filename1  = $image_name;
     }

       // Driver Licence
     if ($request->hasFile('filename2')) {

         $destination_path = 'public/images/driverLicences';
         $personal = $request->file('filename2');
         $image_name = $personal->getClientOriginalName();
         $path = $request->file('filename2')->storeAs($destination_path,$image_name);

         $photo->filename2  = $image_name;

     }

         /// Car License
     if ($request->hasFile('filename3')) {

         $destination_path = 'public/images/carsLicences';
         $personal = $request->file('filename3');
         $image_name = $personal->getClientOriginalName();
         $path = $request->file('filename3')->storeAs($destination_path,$image_name);

         $photo->filename3  = $image_name;
         // $filename = $request->file('filename1')->store('public');
         // $photo->filename1 = basename($filename);
     }
     $photo->save();
     return response()->json(['message' => 'Photos uploaded successfully']);
}

    // update driver inf -> API
 public function update_driver(Request $request , $id )
 {
    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required',
        'gender' => 'required',
        'phone_number' => 'required',
        'city' => 'required',
        'address' => 'required',
        'date_of_birth' => 'required',
        'nationality' => 'required',
        'national_id' => 'required',
        'emergency_number' => 'required',
    ]);

    if ($validator->fails()) {
        return $this->apiResponse(null , $validator->errors(), 400 );
    }

    $driver = DriverInf::find($id);

    if(!$driver)
    {
        return $this->apiResponse(null , ' The User Not found ! ' , 400 );
    }
    $driver->update($request->all());

        if($driver){
            return $this->apiResponse(new driverResource($driver) , 'Driver Inf Updated Successfully ' , 201 );
        }

 }


  // update driver inf -> API
  public function update_location(Request $request , $id )
  {
     $validator = Validator::make($request->all(), [
         'status' => 'required',
         'latitude' => 'required',
         'longitude' => 'required',
     ]);

     if ($validator->fails()) {
         return $this->apiResponse(null , $validator->errors(), 400 );
     }

     $driver = DriverInf::find($id);

     if(!$driver)
     {
         return $this->apiResponse(null , ' The User Not found ! ' , 400 );
     }
     $driver->update($request->all());

         if($driver){
             return $this->apiResponse(new locationResource($driver) , 'Driver location Updated Successfully ' , 201 );
         }

  }



    // update car inf -> API
 public function update_car(Request $request , $id )
 {
    $validator = Validator::make($request->all(), [
        'driver_id' => 'required',
        'car_number' => 'required',
        'car_type' => 'required',
    ]);

    if ($validator->fails()) {
        return $this->apiResponse(null , $validator->errors(), 400 );
    }

    $car = Car::find($id);


    if(!$car)
    {
        return $this->apiResponse(null , ' The User Not found ! ' , 400 );
    }

    $car->update($request->all());
        if($car){
            return $this->apiResponse(new carResource($car) , 'Car Inf Updated Successfully ' , 201 );
        }

 }


   //  update health inf -> API
 public function update_health(Request $request , $id )
 {
    $validator = Validator::make($request->all(), [
        'driver_id' => 'required',
        'pressure' => 'required',
        'diabetes' => 'required',
        'blood' => 'required',
        'diseases' => 'required',
        'surgeries' => 'required',
    ]);

    if ($validator->fails()) {
        return $this->apiResponse(null , $validator->errors(), 400 );
    }

    $health = Health::find($id);

    if(!$health)
    {
        return $this->apiResponse(null , ' The User Not found ! ' , 400 );
    }
    $health->update($request->all());

    if($health){
        return $this->apiResponse(new healthResource($health) , 'Health Inf Updated Successfully ' , 201 );
    }

 }


 // update attachents


 public function update_attachments(Request $request , $id)
{
    $validator = Validator::make($request->all(), [
        'driver_id' => 'required',
        'filename1' => 'required',
        'filename2' => 'required',
        'filename3' => 'required',
    ]);

    if ($validator->fails()) {
        return $this->apiResponse(null , $validator->errors(), 400 );
    }


    $photo = Photo::find($id);
    $photo->driver_id = $request->driver_id;
       // personal photos
     if ($request->hasFile('filename1')) {

         $destination_path = 'public/images/personal';
         $personal = $request->file('filename1');
         $image_name = $personal->getClientOriginalName();
         $path = $request->file('filename1')->storeAs($destination_path,$image_name);

         $photo->filename1  = $image_name;
     }

       // Driver Licence
     if ($request->hasFile('filename2')) {

         $destination_path = 'public/images/driverLicences';
         $personal = $request->file('filename2');
         $image_name = $personal->getClientOriginalName();
         $path = $request->file('filename2')->storeAs($destination_path,$image_name);

         $photo->filename2  = $image_name;

     }

         /// Car License
     if ($request->hasFile('filename3')) {

         $destination_path = 'public/images/carsLicences';
         $personal = $request->file('filename3');
         $image_name = $personal->getClientOriginalName();
         $path = $request->file('filename3')->storeAs($destination_path,$image_name);

         $photo->filename3  = $image_name;

     }
     $photo->save();
     return response()->json(['message' => 'Photos updated successfully']);
}

    // delete user  -> API
 public function destroy($id)
 {
      $driver = DriverInf::find($id);
      if(!$driver){
        return $this->apiResponse(null , ' The User Not found ! ' , 400 );
      }

      $driver->delete($id);
      if($driver){
        return $this->apiResponse(null , 'User Deleted Successfully ' , 200 );
      }
 }

}
