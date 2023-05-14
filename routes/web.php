<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StartController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\RazorpayController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [StartController::class, 'start'])->name('home');
// Route :: get('/user/login', [StartController::class,'userLogin']);
// Route :: get('/user/register', [StartController::class,'userRegister']);

Route::post('/customer/dashboard', [StartController::class, 'start']); 

// Route::post('/customer/login', [CustomAuthController::class, 'customLogin']); 

// Route::post('/customer/registration', [CustomAuthController::class, 'customRegistration']);
Route::get('/customer/logout', [CustomAuthController::class, 'signOut']);

Route::get('/profile/center/{id}', [StartController::class, 'profileCenter']);

Route::post('/user/checkin',[StartController::class, 'checkin'])->name('checkin');

Route::get('/process/payment',[RazorpayController::class,'processPayment'])->name('process');

// Route::get('/sample',[StartController::class, 'sample']);

Route::get('product',[RazorpayController::class,'index']);
Route::post('/payment/store',[RazorpayController::class,'store'])->name('razorpay.payment.store');
Route::post('/pay',[RazorpayController::class,'pay'])->name('razorpay.payment.confirm');


// Route::get('/test/purchase', [OtpController::class,'confirmationPage']);
// Route::post('/user/otp-request', [OtpController::class,'requestForOtp'])->name('requestForOtp');
// Route::post('/user/otp-validate', [OtpController::class,'validateOtp'])->name('validateOtp');
// Route::post('/user/otp-resend', [OtpController::class,'resendOtp'])->name('resendOtp');

// Route::controller(App\Http\Controllers\Auth\AuthOtpController::class)->group(function(){

//     Route::get('/otp/login','login')->name('otp.login');
//     Route::post('/otp/generate', [AuthOtpController::class,'validateOtp'])->name('validateOtp');
//     Route::get('/otp/verification/{user_id}', 'verification')->name('otp.verification');

// });

// Route::get('/otp/login', [AuthOtpController::class,'login'])->name('otp.login');
// Route::post('/otp/generate', [AuthOtpController::class,'generate'])->name('otp.generate');
// Route::get('/otp/verification/{user_id}', [AuthOtpController::class,'verification'])->name('otp.verification');




Route::get('/otp/login', [OtpController::class,'login'])->name('otp.login');
Route::post('/otp/generate', [OtpController::class,'generate'])->name('otp.generate');
Route::get('/otp/verification/{user_id}', [OtpController::class,'verification'])->name('otp.verification');
Route::post('/otp/login',[OtpController::class,'loginWithOtp'])->name('otp.getlogin');


Route::post('/service/message',[StartController::class, 'orderContent'])->name('order.content');
// Route::post('/service/message', function () {
   
// });