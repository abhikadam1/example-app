<?php

use GuzzleHttp\Middleware;
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
Route::match(['get', 'post'], '/data', [HomeController::class, 'login']);
 
Route::any('/FAKE', function () {
    return "<u><h1><b>FAKE</b><br></h1></u>";
});
// Route::get('/age', [HomeController::class, 'index']);
// Route::get('/age', [HomeController::class, 'index'])->middleware('AgeMiddleware');
// Route::get('/', [HomeController::class, 'index'])->middleware('auth.check');

Route::get('/age',[HomeController::class, 'index'])->middleware('age:10');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
