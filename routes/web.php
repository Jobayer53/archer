<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\WorkController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();

//frontend
Route::get('/', [FrontendController::class, 'index'])->name('index');




Route::get('/home', [HomeController::class, 'home'])->name('home');
//users
Route::get('/users', [HomeController::class, 'users'])->name('users');
// Route::get('/users/delete/{user_id}', [HomeController::class, 'user_delete'])->name('user.delete');
Route::delete('/users/destroy/{user_id}', [HomeController::class, 'user_destroy'])->middleware('auth')->name('user.destroy');

Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::post('/profile/update', [HomeController::class, 'profile_update'])->name('profile.update');
Route::post('/profileimage/update', [HomeController::class, 'profileimage_update'])->name('profileimage.update');


//banner
Route::get('/banner/content',[BannerController::class, 'banner_content'])->name('banner.content');
Route::post('/banner/content/update',[BannerController::class, 'bannercontent_update'])->name('bannercontent.update');
Route::get('/banner/image',[BannerController::class, 'banner_image'])->name('banner.image');
Route::post('/banner/image/update',[BannerController::class, 'bannerimage_update'])->name('bannerimage.update');

//about
Route::get('/about/content',[AboutController::class, 'about_content'])->name('about.content');
Route::post('/about/update',[AboutController::class, 'aboutcontent_update'])->name('aboutcontent.update');
Route::get('/about/image',[AboutController::class, 'about_image'])->name('about.image');
Route::post('/about/image/update',[AboutController::class, 'aboutimage_update'])->name('aboutimage.update');

// download Cv
Route::get('/download/cv', [FrontendController::class, 'download_cv'])->name('download.cv');


//experience
Route::get('/experience',[ExperienceController::class, 'index'])->name('experience');

//education
Route::get('/education',[EducationController::class, "index"])->name('education');

// Services
Route::get('/service', [ServiceController::class, "index"])->name('service');

//works
Route::get('/work',[WorkController::class, 'index'])->name('work');
Route::get('/work/details/{id}',[FrontendController::class, 'work_detail'])->name('work.detail');

//client
Route::get('/client',[ClientController::class, 'index'])->name('client');

//blog
Route::get('/blogs',[BlogController::class, 'index'])->name('blog');
Route::get('/blog/create',[BlogController::class, 'blog_create'])->name('blog.create');
Route::post('/blog/store',[BlogController::class, 'blog_store'])->name('blog.store');
Route::get('/blog/edit/{id}',[BlogController::class, 'blog_edit'])->name('blog.edit');
Route::post('/blog/update',[BlogController::class, 'blog_update'])->name('blog.update');

Route::get('/blog/details', [FrontendController::class,'blog_detail'])->name('blog.detail');
