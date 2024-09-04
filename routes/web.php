<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

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


//perubahan ke controller
//Route::get('/',[WelcomeController::class,'index']);

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/world', function(){
    return 'World';
});

Route::get('/haloo', function(){
    return 'Selamat Datang';
});

//Route::get('/about', [WelcomeController::class, 'about']);

//7 prak
Route::get('/about', [AboutController::class, 'aboutPage']);
Route::get('/', [HomeController::class,'Home']);
Route::get('/articles/{id}', [ArticleController::class,'article']);

//route parameters
Route::get('/user/{RizkyPratamaYudha}', function ($name){
    return 'Nama Saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}',function ($postId, $commentId){
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

//Route::get('/articles/{id}', [WelcomeController::class, 'articles']);

//optional parameters//
Route::get('/user/{name?}', function ($name='John'){
    return 'Nama saya '.$name;
});

//Resource Controller
Route::resource('photos', PhotoController::class);

Route::resource('photos',PhotoController::class)->only(['index','show']);
Route::resource('photos',PhotoController::class)->except([
    'create','store','update','destroy'
]);