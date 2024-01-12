<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ExperienceController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;

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
Route::get('/work', [FrontendController::class, 'work'])->name('work');
Route::get('/blog', [FrontendController::class,'blog'])->name('blog');


Route::get('/home', [HomeController::class, 'home'])->name('home');
//users
Route::get('/users', [HomeController::class, 'users'])->name('users');
Route::get('/users/delete/{user_id}', [HomeController::class, 'user_delete'])->name('user.delete');
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


// Route::post('/experience/add', [ExperienceController::class, 'add_experience'])->name('add.experience');
// Route::get('/experience/data', [ExperienceController::class, 'getExperienceData'])->name('getExperienceData');
Route::resource('expData', ExperienceController::class)->except(['create','update','show']);
