<?php
use App\Http\Controllers\reservationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\managereservationController;
use App\Http\Controllers\scheduleController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('auth.login');
});

Route::get('reservation', [CustomAuthController::class, 'reservation'])->name('reservation');
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('register', [CustomAuthController::class, 'registration'])->name('register');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::post('/reservation',[reservationController::class, 'store'])->name('reservation.store');

Route::delete('/managereservation/{id}',[managereservationController::class, 'destroy'])->name('managereservation.destroy');
Route::get('/managereservation',[managereservationController::class, 'show'])->name('managereservation.show');

Route::get('/schedule',[scheduleController::class, 'show'])->name('menu.schedule');

Route::get('/about', function () {
    return view('menu.about');
})->name('about');