<?php
use App\Http\Controllers\RegistryController;
use Illuminate\Support\Facades\Route;

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


/*
/ First route
*/
//Route::resource('registries','RegistryController');

//Route::get('/registries/create', function () {
//    return view('/registries/create');
//});

//Route::get('/registries/create', 'RegistryController@create' );

Route::resource('registries', RegistryController::class);
