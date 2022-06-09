<?php

use App\Http\Controllers\PhoneAuthController;
use App\Http\Controllers\UploadImageController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

//Route::get('/', function () {
//    return Inertia::render('Welcome', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
//});

Route::get('login', function () {
    return view('login');
});
Route::post('login' , [\App\Http\Controllers\UserController::class, 'store']);

Route::get('dashboard', function () {
    $username = \App\Models\User::all()->first()->username;
//    dd($info);
    return view('dashboard_ac' , compact('username'));

})->name('dashboard');

Route::post('user_token', [\App\Http\Controllers\LoginConfirmController::class , 'store']);

Route::get('login_confirm', [\App\Http\Controllers\LoginConfirmController::class , 'index'])->name('login_confirm');

Route::get('phone_auth', [PhoneAuthController::class, 'index']);

Route::get('upload-image', [UploadImageController::class, 'index']);
Route::post('save', [UploadImageController::class, 'save']);

Route::get('upload-page', [\App\Http\Controllers\FileController::class, 'index']);
Route::post('upload-file', [\App\Http\Controllers\FileController::class, 'store']);

Route::get('/album', function () {
    return view('album');
});


Route::get('sign_up', [\App\Http\Controllers\UserController::class, 'index']);
Route::post('sign_up', [\App\Http\Controllers\UserController::class, 'customRegistration']);
Route::get('successlogin', [\App\Http\Controllers\UserController::class, 'dashboard']);
Route::get('sign_in', [\App\Http\Controllers\UserController::class, 'index']);


Route::get('two_fa', [\App\Http\Controllers\TwoFactorAuthController::class, 'index']);

//Route::get('/dashboard', function () {
//    return Inertia::render('Dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//
//require __DIR__.'/auth.php';

Route::get('email' , function () {
//    \Illuminate\Support\Facades\Mail::to('salari.m233@gmail.com')->send(new \App\Mail\OtpMail());
   return new \App\Mail\OtpMail(1234);
});

Route::get('sendemail',[\App\Http\Controllers\MailController::class,'sendEmail']);

Route::get('sendbasicemail',[\App\Http\Controllers\MailController::class,'basic_email']);
Route::get('sendhtmlemail',[\App\Http\Controllers\MailController::class,'html_email']);
Route::get('sendattachmentemail',[\App\Http\Controllers\MailController::class,'attachment_email']);
