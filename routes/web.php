<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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
// $arr =  array(1,2,5,5);
$arr = " ";
Route::get('/view', [HomeController::class, 'index'])->middleware('age:19');;
Route::get('/index', [HomeController::class, 'index'])->middleware(["auth.check:25"]);
Route::get('/login', [HomeController::class, 'login']);
// Route::get('/age', [HomeController::class, 'index']);
// Route::get('/age', [HomeController::class, 'index'])->middleware('AgeMiddleware');
// Route::get('/', [HomeController::class, 'index'])->middleware('auth.check');

Route::get('/age',[
    'middleware' => 'age:4',
    'uses' => 'HomeController@index',
 ]);

Route::get('/', function () {
    return view('welcome');
});

