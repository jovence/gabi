<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Livewire\Appointmentlist;
use App\Livewire\Doctorcreate;
use App\Livewire\DoctorCrud;
use App\Livewire\DoctorEdit;
use App\Livewire\Mails;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [HomeController::class, "index"])->name("home");

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/appointment',  [AppointmentController::class, 'appointment'])->name('appointment.store');

});

//routes made availabel only for admin users
Route::middleware(['auth', 'verified', 'admin'])->group(callback: function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/dashboard', DoctorCrud::class)->name('doctors');
    Route::get('/doctors/appointment', Appointmentlist::class)->name('doctor.appointment');
    Route::get('/doctors/create', Doctorcreate::class)->name('doctors.create');
    Route::get('/doctors/{doctor}/edit', DoctorEdit::class)->name('doctors.edit');
    Route::get('/mail/{appointmentId}', Mails::class)->name('mails');

});

require __DIR__ . '/auth.php';
