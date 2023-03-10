<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContaController;

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

// Route::get(
//     '/welcome',
//     function () {
//         return view('welcome');
//     }
// );
Route::get( '/', function () { return view('inicial'); } );
Route::get( '/institucional', function () { return view('institucional'); } );
Route::get( '/criar_conta', [ContaController::class, 'create'] );

Route::resource('conta', ContaController::class);
