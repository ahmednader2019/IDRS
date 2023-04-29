<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
    Route::post('/driver' , [ApiController::class,'store_driver']);

});

    // store Driver Inf
Route::post('/driver' , [ApiController::class,'store_driver']);

 //  store Car Inf
 Route::post('/car' , [ApiController::class,'store_car']);

 // store Health Inf
 Route::post('/health' , [ApiController::class,'store_health']);

// store attachments
 Route::post('/attachments' , [ApiController::class,'store_attachments']);

 // update Driver Inf
 Route::post('/updateDriver/{id}' , [ApiController::class,'update_driver']);

 // update Car Inf
 Route::post('/updateCar/{id}' , [ApiController::class,'update_car']);

 // update health Inf
 Route::post('/updateHealth/{id}' , [ApiController::class,'update_health']);

 // update attachments
 Route::post('/updateAttachments/{id}' , [ApiController::class,'update_attachments']);

// update location

Route::post('/updateLocation/{id}' , [ApiController::class,'update_location']);

 // delete user
 Route::post('/delete_user/{id}' , [ApiController::class,'destroy']);

 // show Date of user by its ID
 Route::get('show/{id}' , [ApiController::class,'show']);




// Route::group(['middleware' => ['jwt.verify']], function() {

//   //  store Driver Inf
//   Route::post('/driver' , [ApiController::class,'store_driver']);

//     //  store Car Inf
//     Route::post('/car' , [ApiController::class,'store_car']);

//     // store Health Inf
//     Route::post('/health' , [ApiController::class,'store_health']);

//     // update Driver Inf
//     Route::post('/updateDriver/{id}' , [ApiController::class,'update_driver']);

//     // update Car Inf
//     Route::post('/updateCar/{id}' , [ApiController::class,'update_car']);

//     // update health Inf
//     Route::post('/updateHealth/{id}' , [ApiController::class,'update_health']);

//     // delete user
//     Route::post('/delete_user/{id}' , [ApiController::class,'destroy']);

//     // show Date of user by its ID
//     Route::get('show/{id}' , [ApiController::class,'show']);
// });


// Route::middleware(['jwt.verify'])->group(function(){

// //  store Driver Inf
// Route::post('/driver' , [ApiController::class,'store_driver']);

// //  store Car Inf
// Route::post('/car' , [ApiController::class,'store_car']);

// // store Health Inf
// Route::post('/health' , [ApiController::class,'store_health']);

// // update Driver Inf
// Route::post('/updateDriver/{id}' , [ApiController::class,'update_driver']);

// // update Car Inf
// Route::post('/updateCar/{id}' , [ApiController::class,'update_car']);

// // update health Inf
// Route::post('/updateHealth/{id}' , [ApiController::class,'update_health']);

// // delete user
// Route::post('/delete_user/{id}' , [ApiController::class,'destroy']);

// // show Date of user by its ID
// Route::get('show/{id}' , [ApiController::class,'show']);
//     }
// );





