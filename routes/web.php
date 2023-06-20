<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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

	// for post blog related
	Route::delete('/posts/{post}', [PostController::class, 'destroy']);

	Route::post('/posts/{post}', [PostController::class, 'update']);
	Route::get('/posts/{post}', [PostController::class, 'edit'])->middleware('auth');
	


	Route::post('create', [PostController::class, 'store']);
	Route::get('create', [PostController::class, 'create'])->middleware('auth');


	Route::get('/', [PostController::class, 'list']);


	//for user and authenticaiton related

	Route::get('/dashboard', [DashboardController::class, 'showDash'])->middleware('auth');
	// Route::get('/dashboard', [DashboardController::class, 'userPosts'])->middleware('auth');

	Route::get('/login', [AuthController::class, 'show'])->name('login');
	Route::post('/login', [AuthController::class, 'login']);
	Route::get('/logout', [AuthController::class, 'logout']);

	Route::post('/register', [AuthController::class, 'register']);
	Route::get('/register', [AuthController::class, 'registerShow']);
	
	// Route::get('/show', [AuthController::class, 'show']);
	









	






















	// Route::get("/", function(){
	// 	dump(\App\Models\User::all());
	// });