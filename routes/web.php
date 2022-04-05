<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EditorController;
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

/*User Routes*/
//Route::group(['prefix' => 'user','middleware' => 'auth'], function () {
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('user.home');
    Route::get('new-press-release', [EditorController::class,'index'])->name('user.newPressRelease');
    Route::post('new-press-release', [EditorController::class,'store'])->name('user.newPressReleaseStore');
    Route::get('manage-content', [HomeController::class,'index'])->name('user.manageContent');
    Route::post('manage-content', [HomeController::class,'store'])->name('user.manageContentStore');
    Route::get('profile', [HomeController::class,'index'])->name('user.profile');
    Route::post('profile', [HomeController::class,'store'])->name('user.profileStore');
});

/*Admin Routes*/
//Route::group(['prefix' => 'admin', 'middleware' => ['auth','is_admin']], function () {
//Route::group(['middleware' => ['auth','is_admin']], function () {
//    Route::get('/home', [AdminController::class, 'index'])->name('admin.home');
//});




/*Frontend Routes*/
//Route::get('/', function () { return view('frontend\index'); })->name('frontend.home');
Route::get('/pricing', function () { return view('frontend\pricing'); })->name('frontend.pricing');
Route::get('/newshub', function () { return view('frontend\newshub'); })->name('frontend.newshub');
Route::get('/blog', function () { return view('frontend\blog'); })->name('frontend.blog');
Route::get('/contact', function () { return view('frontend\contact'); })->name('frontend.contact');
Route::get('/editorial-guideline', function () { return view('frontend\editorialGuideline'); })->name('frontend.editorial-guideline');
Route::get('/privacy-policy', function () { return view('frontend\privacyPolicy'); })->name('frontend.privacy-policy');
Route::get('/terms-of-service', function () { return view('frontend\termsOfServices'); })->name('frontend.terms-of-service');

/*Login User*/
Route::get('/login', function () { return view('auth.login'); })->name('login');


Route::get('/', [EditorController::class,'index'])->name('user.newPressRelease');
Route::post('/', [EditorController::class,'store'])->name('user.newPressReleaseStore');


