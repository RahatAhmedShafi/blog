<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


// Route::get('/hello/', function () {
//     return view('hello');
// });
// Route::get('/hello/{id}',function ($id) {
//     return "<h1>Rahat $id </h1>";
// });
// Route::get('/hello/{id}',function ($id) {
//     return "<h1>Rahat $id </h1>";
// })->whereAlpha('id');

// Route::get('/hello/{id}',function ($id) {
//     return "<h1>Rahat $id </h1>";
// })->whereNumber('id');

// Route::get('/hello/{id}',function ($id) {
//     return "<h1>Rahat $id </h1>";
// })->whereAlphaNumeric('id');

// Route::get('/hello/{id}',function ($id) {
//     return "<h1>Rahat $id </h1>";
// })->whereIn('id',[1,4]);

// Route::get('/hello/{id}/comment/{comid}',function ($id,$comid) {
//     return "<h1>Rahat $id </h1> <h1>Comment $comid </h1>";
// })->where('id','[0-9]+')->whereAlpha('comid');

// Route::get('/hello/{id}',function ($id) {
//     return "<h1>Rahat is a $id </h1>";
// })->whereIn('id',['superman','batman','spiderman']);;

// Route::get('/hello', function () {
//     return view('hello');
// });
// Route::get('/about', function () {
//     return view('about');
// });
                      // Named Routes
// Route::get('/hello/',function(){
//     return view('hello');
// });
// Route::get('/aboutt', function () {
//     return view('about');
// })->name('myabout');;

// Route::fallback(function () {
//     return view('This page not found');
// });

                      // Learn Blade
Route::get('/login',function(){
    return view('login');
});




// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/user', [UserController::class, 'getUser']);
// Route::get('/user/{name}', [UserController::class, 'aboutName']);
// Route::get('/login', [UserController::class, 'login']);
// Route::get('/about', [UserController::class, 'about']);