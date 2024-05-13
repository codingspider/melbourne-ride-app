<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\TicketController;
use App\Http\Controllers\API\GeneralController;
use App\Http\Controllers\API\Driver\DriverController;
use App\Http\Controllers\API\ProfileUpdateController;
use App\Http\Controllers\API\Driver\BookingController;
use App\Http\Controllers\API\Customer\ProfileController;
use App\Http\Controllers\API\Driver\TransportController;

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



// Auth routes...............
Route::post('registration', [AuthController::class, 'registerUser']);
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware'=> ['auth:sanctum']], function () {
    // Customer APIs.........
    Route::get('services', [GeneralController::class, 'serviceList']);
    Route::get('settings', [GeneralController::class, 'settingsData']);

    Route::get('tickets', [TicketController::class, 'index']);
    Route::get('transport-type', [TransportController::class, 'typeList'])->name('transport-type');
    Route::post('user-password-update', [AuthController::class, 'updatePassword'])->name('user-password-update');
    Route::post('user-profile-update', [ProfileUpdateController::class, 'updateUserInformation'])->name('user-profile-update');
});

Route::group(['prefix'=> 'customer', 'middleware'=> ['auth:sanctum']], function () {
    // Customer APIs.........
    Route::post('create-booking', [\App\Http\Controllers\API\Customer\BookingController::class, 'createBooking']);
    Route::get('payment-list', [\App\Http\Controllers\API\Customer\BookingController::class, 'getPaymentHistory']);
    Route::get('all-bookings', [\App\Http\Controllers\API\Customer\BookingController::class, 'allBooking']);
    Route::get('completed-trip', [\App\Http\Controllers\API\Customer\BookingController::class, 'completedTrip']);
    Route::get('pending-trip', [\App\Http\Controllers\API\Customer\BookingController::class, 'pendingTrip']);
    Route::get('cancelled-trip', [\App\Http\Controllers\API\Customer\BookingController::class, 'cancelledTrip']);
    Route::get('user-profile', [ProfileController::class, 'userProfile'])->name('user-profile');
});

Route::group(['prefix'=> 'tickets', 'middleware'=> ['auth:sanctum']], function () {
    // ticktes APIs.........
    Route::post('create', [TicketController::class, 'store']);
    Route::post('ticket-message-reply/{ticket_id}', [TicketController::class, 'messageReply']);
    Route::post('ticket-close/{ticket_id}', [TicketController::class, 'closeTicket'])->name('close');
});


Route::group(['prefix'=> 'driver', 'middleware'=> ['auth:sanctum']], function () {
    // Driver APIs.........
    Route::get('all-booking-list-view', [BookingController::class, 'allBookingList'])->name('all-booking-list-view');
    Route::get('completed-trip', [BookingController::class, 'completedBookingList'])->name('completed-trip');
    Route::get('pending-trip', [BookingController::class, 'pendingBookingList'])->name('pending-trip');
    Route::get('cancelled-trip', [BookingController::class, 'cancelledBookingList'])->name('cancelled-trip');
    Route::get('user-profile', [DriverController::class, 'userProfile'])->name('user-profile');
    Route::post('update-veicle-information', [TransportController::class, 'updateVehicleInformation'])->name('update-veicle-information');
    
});
