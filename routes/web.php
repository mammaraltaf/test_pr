<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\Auth\RegisterController;
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

    /*Edit Press Release*/
    Route::get('edit-press-release/{id}', [EditorController::class,'edit'])->name('user.editPressRelease');
    Route::post('edit-press-release/{id}', [EditorController::class,'update'])->name('user.editPressReleaseUpdate');
    /*Delete Press Release*/
    Route::get('delete-press-release/{id}', [EditorController::class,'destroy'])->name('user.deletePressRelease');

    Route::get('manage-content', [HomeController::class,'manageContent'])->name('user.manageContent');
/*    Route::post('manage-content', [HomeController::class,'store'])->name('user.manageContentStore');*/
//    Route::get('profile-setting', [HomeController::class,'index'])->name('user.profile');

    /* User Profile Routes*/
    Route::get('/profile-view', function () { return view('user.pages.profileView'); })->name('user.profileView');
    Route::get('/profile-setting', function () { return view('user.pages.profileSetting'); })->name('user.profileSetting');
    /*User Profile Edit*/
    Route::post('/profile-view', [RegisterController::class,'update'])->name('user.profileViewUpdate');
//    Route::post('profile-setting', [HomeController::class,'store'])->name('user.profileStore');

    /*Admin Routes*/
    Route::get('/admin/home', [AdminController::class, 'index'])->middleware('is_admin')->name('admin.home');
    Route::get('/admin/manage-content', [AdminController::class, 'manageContentIndex'])->middleware('is_admin')->name('admin.manageContent');
    Route::get('/admin/user-press-releases', [AdminController::class, 'userPressReleases'])->middleware('is_admin')->name('admin.userPressReleases');
    Route::get('/admin/new-press-release', [EditorController::class,'index'])->middleware('is_admin')->name('admin.newPressRelease');
    Route::post('/admin/new-press-release', [EditorController::class,'adminStore'])->name('admin.newPressReleaseStore');

    Route::get('/admin/profile-setting', [AdminController::class, 'profileSettingIndex'])->middleware('is_admin')->name('admin.profileSetting');
    Route::get('/admin/payments', [AdminController::class, 'paymentsIndex'])->middleware('is_admin')->name('admin.payments');
    Route::get('/admin/invoices', [AdminController::class, 'invoicesIndex'])->middleware('is_admin')->name('admin.invoices');
    Route::get('/admin/customers', [AdminController::class, 'customersIndex'])->middleware('is_admin')->name('admin.customers');
    Route::delete('/admin/customers/{id}', [AdminController::class, 'removeCustomer'])->middleware('is_admin')->name('admin.customerDelete');
    Route::get('/admin/delete-user/{id}', [AdminController::class,'deleteUser'])->name('admin.deleteUser');
    Route::get('/admin/rss-configuration', [AdminController::class, 'rssConfigurationindex'])->middleware('is_admin')->name('admin.rssConfiguration');


    /*Edit Press Release*/
    Route::get('/admin/edit-press-release', [EditorController::class,'adminEdit'])->middleware('is_admin')->name('admin.editPressRelease');
    Route::post('/admin/edit-press-release/{id}', [EditorController::class,'update'])->name('admin.editPressReleaseUpdate');
    /*Delete Press Release*/
    Route::get('/admin/delete-press-release/{id}', [EditorController::class,'destroy'])->name('admin.deletePressRelease');
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

/*Invoice*/
Route::get('/invoice', function () { return view('invoice\invoice'); })->name('pasyment.invoice');





