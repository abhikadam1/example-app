<?php

use App\Http\Controllers\FileUpload;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
// $arr =  array(1,2,5,5);
$arr = " ";
Route::get('/age/{age1}', [HomeController::class, 'index'])->middleware(["auth.check:age1"]);
Route::get('/login', [HomeController::class, 'login']);
Route::get('/getDBData', [HomeController::class, 'getDBData']);
Route::get('/getUserData', [HomeController::class, 'getUserData']);
Route::get('/deleteUserData/{id}', [HomeController::class, 'deleteUserData']);
Route::match(['get', 'post'], '/data', [HomeController::class, 'login']);
 
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
Route::redirect('/here', '/view'); 
Route::redirect('/here1', '/view', 301);
Route::permanentRedirect('/here2', '/view'); 

Route::get('/token', function (Request $request) {
    $token = $request->session()->token();
    // $token = csrf_token();
    return response()->json(['csrf_token' => $token]);    
});

Route::get('/formView', [HomeController::class, 'formView']);

Route::any('/FAKE', function () {
    return "<u><h1><b>FAKE</b><br></h1></u>";
});

// Route::get('formView/', [HomeController::class, 'formView'])->middleware('auth.check:20');
Route::post('saveForm', [HomeController::class, 'saveForm']);
// Route::get('/age', [HomeController::class, 'index']);
// Route::get('/age', [HomeController::class, 'index'])->middleware('AgeMiddleware');
// Route::get('/', [HomeController::class, 'index'])->middleware('auth.check');

// Route::get('/age/{age1}',[HomeController::class, 'index'])->middleware('age:age1');

// Route::get('/age/{age1}', function ($age1) {
//     // return $age1;
//     return view('welcome');
// });


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => ['protectedGroup', 'guest', 'age']], function () {
    Route::get('formView1/', [HomeController::class, 'formView']);
    Route::get('/view/{age1}', [HomeController::class, 'index']);
});

Route::get('/fileUpload', function(){
    return view('fileUpload');
});

Route::post('/handleFile',[FileUpload::class, 'index']);
require __DIR__ . '/auth.php';
