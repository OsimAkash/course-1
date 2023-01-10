<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CoustomerController;
use GuzzleHttp\Promise\Create;
use App\Models\Post;
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


// Route::get('create_coustomer', function() {
//     $data =[
//         'name'=> 'Sakil', 
//         'email'=>'sakil@gmail.com',
//          'votes'=> '122',
//          'created_at'=> now(),
//          'updated_at'=> now()

//         ];

//     DB::table('coustomers')->insert($data);
//     });

//     Route::get('/customers',[CoustomerController::class,'index']);


// Create Table \\

// Route::get('create_user', function(){
//     $data = [
// 'name' => 'Osim Akash',
// 'email' => 'osimakash@gmail.com',
// 'password' => '123'
//     ];

//     App\Models\User::Create($data);


// });
    // insert \\
Route::get('orm', function(){
    $data = [
'title' => 'Welcome to Dhaka',
'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel tempora facere enim aliquid quisquam. Dignissimos at fuga blanditiis obcaecati quidem eaque distinctio. Tempora voluptatem, autem eius ex totam enim voluptatibus?',

'user_id' => 2,
'status' => 3
    ];

    Post::insert($data);
});

Route::get('post/{id}', function ($id) {
    $posts= Post::findOrFail( $id);

    dd($posts);
});


Route::get('get_post', function () {
    $posts= Post::where( 'status',22)->firstOrFail();

    dd($posts);
});



// table data create update OOp Style
Route::get('add-post', function () {
$posts= new Post();
$posts ->title ='This is title';
$posts->description= 'This is description';
$posts->user_id= 1;
$posts->status= 1;
$posts->save();
});


 //Table update OOp Style
Route::get('update-post', function () {
$posts=  Post::find(12);
$posts ->title ='This is new title';
$posts->save();
});

// OOp Create FirstOrNew
   

Route::get('first-or-create', function(){
    $posts = Post::firstOrCreate(  ['title' => 'Hello posts']);

    return $posts;
});

// Oop Delete  Or FindOrFail [Delete extra style]

Route::get('delete-post', function(){
    // $posts = Post::find(14);
    // $posts->delete();

    //Extra delete system

    Post::destroy(16);
});