<?php

use App\Http\Controllers\DriverInfController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Mail\addInf;
use App\Models\DriverInf;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/', function () {
//     return view('dashboard');
// });

            // Delete Driver Information (destroy function inside Driver ) & index
Route::resource('Driver', DriverInfController::class);

           // Show Driver Informations
Route::get('/driverInf' , [DriverInfController::class , 'showDriver']);

          // Show Car Informations
Route::get('/carInf' , [DriverInfController::class , 'showCar']);

         // Show Health Informations
Route::get('/healthInf' , [DriverInfController::class , 'show_health_condition']);

         // Show Urgent
// Route::get('/urgent' , [DriverInfController::class , 'show_urgent']);


       // test
Route::get('/test' , [DriverInfController::class,'Show_test']);


Route::get('/addDriver' , [DriverInfController::class , 'addDriver']);
//Route::get('/step2' , [DriverInfController::class , 'step2']);
Route::match(['get', 'post'], '/step2', [DriverInfController::class , 'step2']);
Route::match(['get', 'post'], '/step3', [DriverInfController::class , 'step3']);
// Route::post('/step3' , [DriverInfController::class , 'step3']);
Route::match(['get', 'post'], '/step4', [DriverInfController::class , 'step4']);
// Route::post('/step4' , [DriverInfController::class , 'step4']);
// Route::match(['get', 'post'], '/save', [DriverInfController::class , 'save']);

// Route::get('/control' , [DriverInfController::class , 'control']);


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles',RoleController::class);
    Route::resource('users',UserController::class);
    });

            // Edit Driver information
Route::get('/edit_driver/{id}' , [DriverInfController::class , 'edit_driver']);
Route::post('/update_driver'  , [DriverInfController::class , 'update_driver'] );


            // Edit Car information
Route::get('/edit_car/{id}' , [DriverInfController::class , 'edit_car']);
Route::post('/update_car'  , [DriverInfController::class , 'update_car'] );


            // Edit Health information
Route::get('/edit_health/{id}' , [DriverInfController::class , 'edit_health']);
Route::post('/update_health'  , [DriverInfController::class , 'update_health']);



          // Show urgent cars data
Route::get('/urgent' , [DriverInfController::class , 'urgent']);

         // Show Control Page
Route::get('/control' , [DriverInfController::class , 'control']);

Route::get('/download/{id}/{filename}', [DriverInfController::class,'download'])->name('file.download');

Route::get('/Details/{id}' , [DriverInfController::class , 'edit']);

Route::get('MarkAsRead_all',[DriverInfController::class,'MarkAsRead_all'])->name('MarkAsRead_all');

Route::get('download/{id}/{filename}', [DriverInfController::class,'get_file']);

Route::post('/save' , [DriverInfController::class , 'store']);
Route::get('test' ,[PhotoController::class,'index']);
Route::post('/upload-photos', [PhotoController::class,'upload'])->name('upload-photos');
Route::get('/photos/{id}/{filename}/download', [PhotoController::class, 'download'])->name('download-photo');

     /// mail route
// Route::get('/send', function () {
//    Mail::to('ranaelmazny21@gmail.com')->send(new addInf('rana Elmazeny','1'));
//    return "sending";
// });

// Route::get('/photos/download/{filename}', [PhotoController::class,'downloadByName'])->name('photos.download.name');


// Route::post('/location', [LocationController::class,'store']);


Route::get('show-user-location-data', [LocationController::class, 'index']);



            // sms
Route::get('send-sms-notification',[NotificationController::class ,'send']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
