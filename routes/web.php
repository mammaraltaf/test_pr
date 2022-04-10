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

Route::group(['middleware' => 'auth'], function () {
    /*User Routes*/
    Route::get('/home', [HomeController::class, 'index'])->name('user.home');
    Route::get('new-press-release', [EditorController::class,'index'])->name('user.newPressRelease');
    Route::post('new-press-release', [EditorController::class,'store'])->name('user.newPressReleaseStore');
    Route::post('edit-new-press-release', [EditorController::class,'editButtonstore'])->name('user.editButtonstore');
    Route::get('manage-content', [HomeController::class,'index'])->name('user.manageContent');
/*    Route::post('manage-content', [HomeController::class,'store'])->name('user.manageContentStore');*/
//    Route::get('profile-setting', [HomeController::class,'index'])->name('user.profile');
    Route::get('/profile-setting', function () { return view('user.pages.profileSetting'); })->name('user.profileSetting');
    Route::get('/profile-view', function () { return view('user.pages.profileView'); })->name('user.profileView');
    Route::get('/profile-view', function () { return view('user.pages.profileView'); })->name('user.profileView');
//    Route::post('profile-setting', [HomeController::class,'store'])->name('user.profileStore');


    /*Admin Routes*/
    Route::get('/admin/home', [AdminController::class, 'index'])->middleware('is_admin')->name('admin.home');
    Route::get('/admin/manage-content', [AdminController::class, 'index'])->middleware('is_admin')->name('admin.manageContent');
    Route::get('/admin/new-press-release', [AdminController::class, 'index'])->middleware('is_admin')->name('admin.newPressRelease');
    Route::get('/admin/profile-setting', [AdminController::class, 'index'])->middleware('is_admin')->name('admin.profileSetting');
    Route::get('/admin/payments', [AdminController::class, 'index'])->middleware('is_admin')->name('admin.payments');
    Route::get('/admin/invoices', [AdminController::class, 'index'])->middleware('is_admin')->name('admin.invoices');
    Route::get('/admin/customers', [AdminController::class, 'index'])->middleware('is_admin')->name('admin.customers');
    Route::get('/admin/rss-configuration', [AdminController::class, 'index'])->middleware('is_admin')->name('admin.rssConfiguration');

});

/*Frontend Routes*/
Route::get('/', function () { return view('frontend\index'); })->name('frontend.home');
Route::get('/pricing', function () { return view('frontend\pricing'); })->name('frontend.pricing');
Route::get('/newshub', function () { return view('frontend\newshub'); })->name('frontend.newshub');
Route::get('/blog', function () { return view('frontend\blog'); })->name('frontend.blog');
Route::get('/contact', function () { return view('frontend\contact'); })->name('frontend.contact');
Route::get('/editorial-guideline', function () { return view('frontend\editorialGuideline'); })->name('frontend.editorial-guideline');
Route::get('/privacy-policy', function () { return view('frontend\privacyPolicy'); })->name('frontend.privacy-policy');
Route::get('/terms-of-service', function () { return view('frontend\termsOfServices'); })->name('frontend.terms-of-service');

/*Login User*/
Route::get('/login', function () { return view('auth.login'); })->name('login');





