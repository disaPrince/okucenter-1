<?php

use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Auth::routes();

// API routes;

Route::get('/', function () {
    return view('new-home');
})->name('new-home');

Route::get('/about', function() {
    return view('about');
})->name('about');

Route::get('courses', function() {
    return view('courses');
})->name('courses');

Route::get('contact', function() {
    return view('contact');
})->name('contact');

// Route::get('/login', function() {
//     return view('auth/login');
// })->name('login');

// Route::get('/showCourse/{id}', [GuestController::class, 'showCourse'])->name('show.course');
Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::group(['prefix' => 'course'], function() {
    Route::get('/add', [HomeController::class, 'courseAddView'])->name('course.add.view');
    Route::post('/add', [HomeController::class, 'courseAdd'])->name('course.add');
    Route::get('/delete/{id}', [HomeController::class, 'courseDelete'])->name('course.delete');
    Route::get('/update/{id}', [HomeController::class, 'courseUpdateView'])->name('course.update.view');
    Route::post('/update/{id}', [HomeController::class, 'courseUpdate'])->name('course.update');
});

Route::group(['prefix' => 'topic'], function() {
    Route::get('/{id}', [TopicController::class, 'topicList'])->name('topic.list');
    Route::get('/add/{id}', [TopicController::class, 'topicAddView'])->name('topic.add.view');
    Route::post('/add/{id}', [TopicController::class, 'topicAdd'])->name('topic.add');
    Route::get('/delete/{id}/{courseId}', [TopicController::class, 'topicDelete'])->name('topic.delete');
    Route::get('/update/{id}/{courseId}', [TopicController::class, 'topicUpdateView'])->name('topic.update.view');
    Route::post('/update/{id}/{courseId}', [TopicController::class, 'topicUpdate'])->name('topic.update');
});

Route::group(['prefix' => 'user'], function() {
    Route::get('/',[UserController::class, 'usersList'])->name('users.list');
    Route::get('/create', [UserController::class, 'userCreateView'])->name('user.create.view');
    Route::post('/create', [UserController::class, 'userCreate'])->name('user.create');
    Route::get('/control/{id}', [UserController::class, 'userControl'])->name('user.control');
    Route::post('/changePassword', [UserController::class, 'userChangePass'])->name('user.change.password');
    Route::post('/save', [UserController::class, 'userSave'])->name('user.save');
    Route::get('/delete/{id}', [UserController::class, 'userDelete'])->name('user.delete');
    Route::get('/course/{id}/{topicId}', [UserController::class, 'userCourse'])->name('user.course');
});
