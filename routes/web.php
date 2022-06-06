<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\API\SetDataController;
use Illuminate\Support\Str;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/accounts', AccountController::class);
// Route::get('/test', function(){
//   return view('test');
// });

//Route::get('/id', function(){
// return Str::orderedUuid()->tostring();
//return Str::isUuid('95d2db03-e71a-4066-98a5-8');
//return (string) Str::uuid();
//});

Route::resource('/contacts', ContactController::class);

Route::resource('projects', ProjectController::class);

Route::resource('users', UserController::class);

//Route::get('accounts/create', 'AccountController);

Route::get('login/{provider}', [SocialController::class,'redirect']);
Route::get('login/{provider}/callback',[SocialController::class,'Callback']);
