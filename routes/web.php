<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;


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

Route::middleware(['lang'])->prefix("{lang}")->group(function () {

    
    Route::get('/', function () {
        return view('home');
    });

    
    Route::get('flight-search', [FlightController::class, "search"]);

   
});

Route::redirect('/','/en');


Route::get('change/{lg}', function (Request $request) {

    $newLang = $request->lg;
    App::setLocale($newLang);
    return redirect("/$newLang");

});


