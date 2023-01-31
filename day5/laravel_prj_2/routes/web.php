<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\admin\AdminUserController;
use App\Http\Controllers\admin\CategoriesController;
use App\Http\Controllers\admin\ContactDataController;
use App\Http\Controllers\admin\VideoUploadController;

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

//press ctrl+alt+i and homeController will be imported/used above.
Route::get('/', [HomeController::class, "index"])->name('site.home');

Route::middleware(['guest:user'])->group(function () {
    Route::get('/user/register', [UserController::class, "register"])->name('site.register');
    Route::post('/user/register', [UserController::class, "register_process"]);
    //with post method, a different function is executed, on submit.
    Route::get('/user/login', [UserController::class, "login"])->name("site.login");
    Route::post('/user/login', [UserController::class, "login_process"]);
});

Route::middleware(['auth:user'])->group(function () {
    Route::get('/videos/upload', [VideoController::class, "upload"])->name('site.video.upload');
    Route::post('/videos/upload', [VideoController::class, "upload_process"]);
    Route::get('user/logout', [UserController::class, "UserLogout"])->name('site.user.logout');
});

Route::get('/contact-us', [ContactController::class, "contact"])->name('site.contact');
Route::post('/contact-us', [ContactController::class, "process"]);



####################################################################################################################################################
///ADMIN PAGES HERE///
####################################################################################################################################################



Route::get('/admin/login', [AdminUserController::class, "login"])->name("admin.login");
Route::post('/admin/login', [AdminUserController::class, "login_validation"]);

Route::get('/admin/categories', [CategoriesController::class, "fn_categories"])->name("admin.categories");
Route::post('/admin/categories', [CategoriesController::class, "insert_category"]);

Route::get('/admin/contact-us-data', [ContactDataController::class, "contact"])->name("admin.contact");
Route::post('/admin/contact-us-data', [ContactDataController::class, "contact_validation"]);