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
use Illuminate\Support\Facades\DB;

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
            session(['form_data1' => $data]);
            return view('driver.addDriver2' );
        }

        // third page of the form (health)
    public function step3(Request $request)
    {
        $data = $request->all(); // Get the form data
        session(['form_data2' => $data]);
        return view('driver.addDriver3' );
    }

       // fourth page of the form (attachements)
    public function step4(Request $request)
    {
        $data = $request->all(); // Get the form data
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
       session()->forget('form_data1');
       session()->forget('form_data2');
       session()->forget('form_data3');

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
             return redirect()->back()->withErrors(['error'=> $e->getMessage()]);
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
             return redirect()->back()->withErrors(['error'=> $e->getMessage()]);
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
             return redirect()->back()->withErrors(['error'=> $e->getMessage()]);
   }
   $photo = new Photo();
   $photo->driver_id = $DriverInf->id;

      // personal photos
    if ($request->hasFile('filename1')) {

        $destination_path = 'public/images/personal';
        $personal = $request->file('filename1');
        $image_name = $personal->getClientOriginalName();
        $path = $request->file('filename1')->storeAs($destination_path,$image_name);

        $photo->filename1  = $image_name;
        // $filename = $request->file('filename1')->store('public');
        // $photo->filename1 = basename($filename);
    }

      // Driver Licence
    if ($request->hasFile('filename2')) {

        $destination_path = 'public/images/driverLicences';
        $personal = $request->file('filename2');
        $image_name = $personal->getClientOriginalName();
        $path = $request->file('filename2')->storeAs($destination_path,$image_name);

        $photo->filename2  = $image_name;
        // $filename = $request->file('filename1')->store('public');
        // $photo->filename1 = basename($filename);
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

             //  Mail
       $email = $DriverInf->email;
       $name = $DriverInf->name;
       $id = $DriverInf->id;
       Mail::to($email)->send(new AddInf($name , $id));

          // Notification
          $DriverInf = DriverInf::latest()->first();
          $user = User::get();
          Notification::send($user, new add_inf($DriverInf));

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
        $driver = DriverInf::where('id',$id)->first();
        $car = Car::where('driver_id',$id)->get();
        $health  = Health::where('driver_id',$id)->get();
        $attachments  = Photo::where('driver_id',$id)->get();

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
        return redirect()->back()->withErrors(['error'=> $e->getMessage()]);
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
        return redirect()->back()->withErrors(['error'=> $e->getMessage()]);
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
           return redirect()->back()->withErrors(['error'=> $e->getMessage()]);
            }
    }

    // delete the user from the database
    public function destroy($id)
    {
         $driver = DriverInf::find($id);
         $driver->delete();
         session()->flash('error', ' User Deleted Successfully');
         return redirect('/driverInf');
    }

    public function download($id, $filename)
    {
        $file = DB::table('photos')->where('id', $id)->first();

        if (!$file) {
            abort(404);
        }

        $fileData = Storage::get($file->filepath);

        return response()->download(storage_path('app/' . $file->filepath), $filename);
    }

    public function get_file($id,$filename)
    {
        $contents= Storage::disk('public_uploads')->getAdapter()->applyPathPrefix($id.'/'.$filename);
        return response()->download( $contents);
        // return $file_name ;
        // return Storage::download($invoice_number.'/'.$file_name);
  //      Storage::disk('public_uploads')->put($invoice_number.'/'.$file_name, 'Contents');
        // $contents= Storage::disk('public_uploads')->getDriver()->getAdapter()->applyPathPrefix($invoice_number.'/'.$file_name);
        // return response()->download( $contents);
    }

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
