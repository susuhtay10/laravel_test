<?php


use App\Http\Controllers\RegistraController;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redis;
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

Route::get('/', function() {
    Redis::set('test', 'testing name');
    dd(Redis::get('test'));
    return view('welcome');
});

Route::get('header', function() {
    return view('header');
});

Route::get('main', function(){
    return view('main');
});

// Route::get('registrationform', function() {
//     return view('registrationform');
// });

Route::get('/registrationform',[RegistraController::class,'showRegistrationForm'])->name('registrationform');
Route::post('/registrationform',[RegistraController::class,'registrationform']);
 