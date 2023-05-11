<?php

namespace App\Http\Controllers;

use App\Mail\addInf ;
use Carbon\Carbon;
use mailgun\mailgun;
use App\Models\Car;
use App\Models\CarInf;
use App\Models\DriverInf;
use App\Models\Health;
use App\Models\HealthInf;
use App\Models\Photo;
use App\Models\User;
use App\Notifications\add_inf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;
use File;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Geocoder\Geocoder;
use Geocoder\Provider\OpenStreetMapsProvider;
use Geocoder\Provider\OpenStreetMap\OpenStreetMapProvider;
use Geocoder\HttpAdapter\CurlHttpAdapter;



class DriverInfController extends Controller
{
              // First Page of the form (driver)
        public function index()
        {
        return view('driver.addDriver');
        }

        public function show_test()
        {
            return view('driver.test');
        }

         // Second Page of the form (car)
        public function step2(Request $request)
        {
            $data = $request->all(); // Get the form data
            // $data = $request->validate([
            //     'name' => 'required|string|max:255',
            //     'email' => 'required|email|unique:driver_infs,email|max:255',
            //     'gender' => 'required',
            //     'phone_number' => 'required|string|max:20',
            //     'city' => 'required|string|max:255',
            //     'address' => 'required|string|max:255',
            //     'date' => 'required|date|before:today',
            //     'nationality' => 'required',
            //     'national_id' => 'required|string|max:14|unique:driver_infs',
            //     'emergency_number' => 'required|string|max:20',
            // ]);
            // $validator = $request->validate([
            //     'name' => 'required|string|max:255',
            //     'email' => 'required|email|unique:driver_infs,email|max:255',
            //     'gender' => 'required|in:male,female',
            //     'phone_number' => 'required|string|max:20',
            //     'city' => 'required|string|max:255',
            //     'address' => 'required|string|max:255',
            //     'date' => 'required|date|before:today',
            //     'nationality' => 'required|string|max:255',
            //     'national_id' => 'required|string|max:14|unique:driver_infs',
            //     'emergency_number' => 'required|string|max:20',
            // ]);
            // if ($validator->fails()) {
            //     return redirect()->back()->with('error',$validator->errors);

            // }
            session(['form_data1' => $data]);
            return view('driver.addDriver2' );
        }

        // third page of the form (health)
    public function step3(Request $request)
    {
        $data = $request->all(); // Get the form data
        // $data = $request->validate([
        //     'car_number' => 'required',
        //     'car_type' => 'required',
        //     'car_owner' => 'required',
        //     'car_owner_details' => 'nullable',
        // ]);
        session(['form_data2' => $data]);
        return view('driver.addDriver3' );
    }

       // fourth page of the form (attachements)
    public function step4(Request $request)
    {
        $data = $request->all(); // Get the form data
        // $data = $request->validate([
        //     'pressure' => 'required',
        //     'diabetes' => 'required',
        //     'blood' => 'required',
        //     'diseases' => 'required',
        //     'diseases_details' => 'nullable',
        //     'surgeries' => 'required',
        //     'surgeries_details' => 'nullable',
        // ]);
        session(['form_data3' => $data]);
        return view('driver.addDriver4' );
    }


    public function create()
    {
        //
    }

        // store informations in tables
    public function store(Request $request)
    {
    //    $finalData = $request->all();
       $formData1 = session('form_data1');
       $formData2 = session('form_data2');
       $formData3 = session('form_data3');

       $mergedData = array_merge($formData1,$formData2,$formData3);

       try
            {
                $DriverInf = new DriverInf();
                $DriverInf->name = $mergedData['name'];
                $DriverInf->email = $mergedData['email'];
                $DriverInf->gender = $mergedData['gender'];
                $DriverInf->phone_number = $mergedData['phone_number'];
                $DriverInf->city = $mergedData['city'];
                $DriverInf->address = $mergedData['address'];
                $DriverInf->date_of_birth = $mergedData['date'];
                $DriverInf->nationality = $mergedData['nationality'];
                $DriverInf->national_id = $mergedData['national_id'];
                $DriverInf->emergency_number = $mergedData['emergency_number'];
                $age = Carbon::parse($DriverInf->date_of_birth)->age;
                $DriverInf->age = $age ;
                $DriverInf->Created_By = Auth::user()->name;
                $DriverInf->save();

          }
            catch(Exception $e){
             return redirect()->back()->withErrors(['errors'=> $e->getMessage()]);
   }
   try
{
                $Car = new Car();
                $Car->driver_id = $DriverInf->id;
                $Car->car_number = $mergedData['car_number'];
                $Car->car_type = $mergedData['car_type'];
                $Car->car_owner = $mergedData['car_owner'];
                $Car->car_owner_details = $mergedData['car_owner_details'];
                $Car->save();
          }
            catch(Exception $e){
             return redirect()->back()->withErrors(['errors'=> $e->getMessage()]);
   }
   try
            {
                $Health = new Health();
                $Health->driver_id = $DriverInf->id;
                $Health->pressure = $mergedData['pressure'];
                $Health->diabetes = $mergedData['diabetes'];
                $Health->blood = $mergedData['blood'];
                $Health->diseases = $mergedData['diseases'];
                $Health->diseases_details = $mergedData['diseases_details'];
                $Health->surgeries = $mergedData['surgeries'];
                $Health->surgeries_details = $mergedData['surgeries_details'];
                $Health->save();
          }
            catch(Exception $e){
             return redirect()->back()->withErrors(['errors'=> $e->getMessage()]);
   }
   $photo = new Photo();
   $photo->driver_id = $DriverInf->id;

      // personal photos
    if ($request->hasFile('personal_photo')) {

        $destination_path = 'public/images/personal';
        $personal = $request->file('personal_photo');
        $image_name = $personal->getClientOriginalName();
        $path = $request->file('personal_photo')->storeAs($destination_path,$image_name);

        $photo->personal_photo  = $image_name;
    }

      // Driver Licence
    if ($request->hasFile('driver_licence')) {

        $destination_path = 'public/images/driverLicences';
        $personal = $request->file('driver_licence');
        $image_name = $personal->getClientOriginalName();
        $path = $request->file('driver_licence')->storeAs($destination_path,$image_name);

        $photo->driver_licence = $image_name;
    }

        /// Car License
    if ($request->hasFile('car_licence')) {

        $destination_path = 'public/images/carsLicences';
        $personal = $request->file('car_licence');
        $image_name = $personal->getClientOriginalName();
        $path = $request->file('car_licence')->storeAs($destination_path,$image_name);

        $photo->car_licence  = $image_name;
    }
    $photo->save();

             //   Send mail to gmail
       $email = $DriverInf->email;
       $name = $DriverInf->name;
       $id = $DriverInf->id;
       Mail::to($email)->send(new AddInf($name , $id));

          // Notification
          $DriverInf = DriverInf::latest()->first();
          $user = User::get();
          Notification::send($user, new add_inf($DriverInf));


          /// forget sessions
          session()->forget('form_data1');
          session()->forget('form_data2');
          session()->forget('form_data3');

          // User added successfully message
          session()->flash('success', 'User added successfully');
          return redirect('/Driver');



 }


         // Show Driver Informations
    public function showDriver(DriverInf $driverInf)
        {
        $driver = DriverInf::all();
        return view('Driver.showDriver',compact('driver'));
        }


        // Show Car Informations
      public function showCar()
       {
            $car = Car::all();
            return view('Driver.showCar' , compact('car'));
        }


      // Show Health Informations
    public function show_health_condition()
    {
         $health = Health::all();
         return view('Driver.ShowHealthCondition' , compact('health'));
     }

      // Show urgent page
    //   public function show_urgent()
    //   {
    //     return "ahmed" ;
    //     // $driver = DriverInf::all();
    //     // return view('Driver.urgent' , compact('driver'));
    //   }



    public function edit($id)
    {
        $driver = DriverInf::findorFail($id);
        $car = Car::findorFail($id);
        $health  = Health::findorFail($id);
        $attachments  = Photo::findorFail($id);

        return view('Driver.details',compact('driver','car','health','attachments'));
    }




        // Edit Driver Informations
    public function edit_driver($id)
    {
        $driver = DriverInf::findorFail($id);
        return view('driver.edit_driver',compact('driver'));
    }



       // Edit Car Informations
    public function edit_car($id)
    {
        $car = Car::findorFail($id);
        return view('driver.edit_car',compact('car'));
    }



      // Edit Health Informations
    public function edit_health($id)
    {
        $health = Health::findorFail($id);
        return view('driver.edit_health',compact('health'));
    }



           // update Driver Informations
    public function update_driver(Request $request)
    {
        $DriverInf = DriverInf::findorFail($request->id);
        try
        {
            $DriverInf->name = $request->name;
            $DriverInf->email = $request->email;
            $DriverInf->gender = $request->gender;
            $DriverInf->phone_number = $request->phone_number;
            $DriverInf->city = $request->city;
            $DriverInf->address = $request->address;
            $DriverInf->date_of_birth = $request->date_of_birth;
            $DriverInf->nationality = $request->nationality;
            $DriverInf->national_id = $request->national_id;
            $DriverInf->emergency_number = $request->emergency_number;
            $DriverInf->Created_By = Auth::user()->name;
            $DriverInf->save();
            session()->flash('success', 'Driver  Information updated successfully');
            return redirect('/driverInf');
      }
        catch(Exception $e){
        return redirect()->back()->withErrors(['errors'=> $e->getMessage()]);
   }
}



          // Update Car Informations
 public function update_car(Request $request)
 {

           $car = Car::findorFail($request->id);
            try
            {
                $car->car_owner = $request->car_owner;
                $car->car_owner_details = $request->car_owner_details;
                $car->car_number = $request->car_number;
                $car->car_type = $request->car_type;
                $car->save();
                session()->flash('success', 'Car  Information updated successfully');
                return redirect('/carInf');
           }
        catch(Exception $e)
         {
        return redirect()->back()->withErrors(['errors'=> $e->getMessage()]);
         }
 }



    // update Health Informations
    public function update_health(Request $request)
    {
           $health = Health::findorFail($request->id);
               try
               {
                   $health->pressure = $request->pressure;
                   $health->diabetes = $request->diabetes;
                   $health->blood = $request->blood;
                   $health->diseases = $request->diseases;
                   $health->diseases_details = $request->diseases_details;
                   $health->surgeries = $request->surgeries;
                   $health->surgeries_details = $request->surgeries_details;
                   $health->save();
                   session()->flash('success', 'health  Information updated successfully');
                   return redirect('/healthInf');
              }
           catch(Exception $e)
            {
           return redirect()->back()->withErrors(['errors'=> $e->getMessage()]);
            }
    }

    // delete the user from the database
    public function destroy($id)
    {
         $driver = DriverInf::find($id);
         $driver->delete();
         session()->flash('errors', ' User Deleted Successfully');
         return redirect('/driverInf');
    }


    // safe cars

    public function safe()
    {
        $driver  = DriverInf::all();
        return view('driver.safe' , compact('driver'));
    }

    //  public function location($id)
    //  {
    //     $driver = DriverInf::findorFail($id);
    //     $lat = $driver->latitude;
    //     $long = $driver->longitude;

    //     $adapter = new CurlHttpAdapter();
    //     $provider = new OpenStreetMapsProvider($adapter);
    //      $geocoder = new Geocoder( $provider);


    //     $location = $geocoder->reverse( 30.033333, 31.233334)->first();
    //     $address = $location->getStreetNumber() . ' ' . $location->getStreetName() . ', ' . $location->getLocality() . ', ' . $location->getCountry();

    //     return view('driver.urgent',compact('address'));

    //  }
    // public function download($id, $filename)
    // {
    //     $file = DB::table('photos')->where('id', $id)->first();

    //     if (!$file) {
    //         abort(404);
    //     }

    //     $fileData = Storage::get($file->filepath);

    //     return response()->download(storage_path('app/' . $file->filepath), $filename);
    // }

//     public function get_file($id,$filename)
//     {
//         $contents= Storage::disk('public_uploads')->getAdapter()->applyPathPrefix($id.'/'.$filename);
//         return response()->download( $contents);
//         // return $file_name ;
//         // return Storage::download($invoice_number.'/'.$file_name);
//   //      Storage::disk('public_uploads')->put($invoice_number.'/'.$file_name, 'Contents');
//         // $contents= Storage::disk('public_uploads')->getDriver()->getAdapter()->applyPathPrefix($invoice_number.'/'.$file_name);
//         // return response()->download( $contents);
//     }

    public function MarkAsRead_all (Request $request)
    {

        $userUnreadNotification= auth()->user()->unreadNotifications;

        if($userUnreadNotification) {
            $userUnreadNotification->markAsRead();
            return back();
        }

    }

           // Show Urgent Page
    public function urgent()
    {
        $driver  = DriverInf::all();
        return view('driver.urgent' , compact('driver'));
    }

         // Show Control Page
    public function control()
    {
        return view('driver.control');
    }
}
