<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CoustomerController;
use Illuminate\Support\Facades\DB;

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

// Route::get('/', function () {
//     return view('welcome');
    
// });
// Route::get('hello', function () {
//     return 'Hello World';
// });

// Route::get('/users',[UserController::class,'index']);
// Route::get('users/create',[UserController::class,'create']);
// Route::post('/users',[UserController::class,'store']);
// Route::put('/users',[UserController::class,'update']);
// Route::patch('/users',[UserController::class,'update_Name']);
// Route::delete('/users',[UserController::class,'delete']);

// Route::redirect('/test', '/test-any');
// Route::any('test-any', function(){
// return 'I am from any';
// });


Route::get('create_coustomer', function() {
    $data =[
        'name'=> 'Sakil', 
        'email'=>'sakil@gmail.com',
         'votes'=> '122',
         'created_at'=> now(),
         'updated_at'=> now()

        ];

    DB::table('coustomers')->insert($data);
    });

    Route::get('/customers',[CoustomerController::class,'index']);