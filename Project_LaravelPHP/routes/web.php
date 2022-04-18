<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminImageController;
use App\Http\Controllers\AdminTypesController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\LikeShareController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[AccountController::class,'login']);
Route::get('/register',[AccountController::class,'register']);
Route::get('/main',[AccountController::class,'main']);
Route::get('/profile/{id}',[ProfileController::class,'profile']);
Route::get('/admin',[ProfileController::class,'admin']);

Route::get('/admin-create',[ProfileController::class,'admin_create_view']);
Route::post('/admin-create-progress',[ProfileController::class,'create']) -> name('admin-create-progress');
Route::get('/admin-update/{id}',[ProfileController::class,'admin_update_view']);
Route::get('/admin-delete/{id}',[ProfileController::class,'delete']);
Route::post('/admin-update-progress',[ProfileController::class,'update']) -> name('admin-update-progress');

Route::post('/register-progress', [AccountController::class, 'register_controller']) -> name('register-progress');
Route::post('/login-progress', [AccountController::class, 'login_controller']) -> name('login-progress');

Route::get('/upload',[ImageUploadController::class,'view_upload_form']);
Route::post('/upload-image',[ImageUploadController::class,'upload_image'])->name('upload-image');

Route::get('/galery/{id}',[GaleryController::class,'view_galerry']);

Route::get('/image/{id}',[ImageController::class, 'view_current_image']);
Route::get('/review/{id}',[ImageController::class,'open_review_form']);
Route::post('/image-create-review',[ImageController::class,'upload_review'])->name('image-create-review');
Route::get('/personal-collection/{id}', [GaleryController::class,'view_collection']);

Route::get('/same-type/{id}',[GaleryController::class, 'display_same_type']);

Route::get('/add-new-type',[GaleryController::class, 'display_add_type']);
Route::post('/create-new-type',[GaleryController::class, 'add_new_type'])->name('create-new-type');

Route::get('/like/{id}',[LikeShareController::class, 'like_form']);
Route::post('/like',[LikeShareController::class, 'like_this_image'])->name('like');

Route::get('/admin-type',[AdminTypesController::class, 'display_admin_types']);
Route::get('/admin-type-update/{id}',[AdminTypesController::class, 'admin_type_update_view']);
Route::post('/admin-type-update',[AdminTypesController::class, 'update_types'])->name('admin-type-update');
Route::get('/admin-delete-type/{id}',[AdminTypesController::class,'types_delete']);

Route::get('/admin-image',[AdminImageController::class,'view_all']);
Route::get('/admin-image-update/{id}',[AdminImageController::class, 'admin_update_image_view']);
Route::post('/admin-image-update',[AdminImageController::class, 'update_image'])->name('admin-image-update');
Route::get('/admin-delete-image/{id}',[AdminImageController::class,'image_delete']);
