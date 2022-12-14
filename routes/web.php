<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Landing;
use App\Http\Livewire\Videoconsult\Main1;
use App\Http\Livewire\Doctor\Doctors;
use App\Http\Livewire\Lab\Labs;
use App\Http\Livewire\Medicinepharmacy\Medpharmacy;
use App\Http\Livewire\Surgery\Surgery;
use App\Http\Livewire\Providers\Prime\Forprime;
use App\Http\Livewire\Providers\Fordoctors\Providersdoctor;
use App\Http\Livewire\Providers\Fordoctors\Profile\Profile;
use App\Http\Livewire\Providers\Fordoctors\Healthfeed\Feed;
use App\Http\Livewire\Providers\Fordoctors\Clinics\Clinics;
use App\Http\Livewire\Providers\Fordoctors\Clinic\Consult\Consult;
use App\Http\Livewire\Providers\Contactus;
use App\Http\Livewire\Providers\Hospitals\Hospitals;
use App\Http\Livewire\Providers\Qikwell\Qikwell;
use App\Http\Livewire\Providers\Providers\Providers;



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

// Route::get('/404', function () {
//     return view('errors.404');
// });

Route::get('/', Landing::class)->name('/');
Route::get('/video', Main1::class)->name('video');
Route::get('/doctors', Doctors::class)->name('doctors');
Route::get('/labs', Labs::class)->name('labs');
Route::get('/medpharmacy', Medpharmacy::class)->name('medpharmacy');
Route::get('/surgery', Surgery::class)->name('surgery');
Route::get('/company/contact', Contactus::class)->name('/company/contact');
Route::get('/providers/prime', Forprime::class)->name('/prime');
Route::get('/providers/doctors', Providersdoctor::class)->name('/doctors');
Route::get('/providers/doctors/profile', Profile::class)->name('/doctors/profile');
Route::get('/providers/doctors/health-feed', Feed::class)->name('/doctors/health-feed');
Route::get('/providers/clinics', Clinics::class)->name('/clinics');
Route::get('/providers/clinics/consult', Consult::class)->name('/clinics/consult');
Route::get('/providers/hospitals', Hospitals::class)->name('/hospitals');
Route::get('/providers/hospitals/qikwell', Qikwell::class)->name('/hospitals/qikwell');
Route::get('/providers', Providers::class)->name('/');


