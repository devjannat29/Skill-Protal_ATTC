<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\backend\PropertyTypeController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Certificate;
use GuzzleHttp\Psr7\Request;
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

//Home route
Route::get('/',[HomeController::class,'Index'])->name('home.index');
Route::get('/certificate',[HomeController::class,'certificate'])->name('home.certificate');
Route::get('/certificate/{id}',[CertificateController::class,'certificate'])->name('admin.certificate');
Route::get('/print_certificate/{id}',[CertificateController::class,'print_certificate'])-> name('print_certificate');

// admin login route
Route::get('/admin/login',[AdminController::class,'AdminLogin'])->name('admin.login');


Route::get('/dashboard',[HomeController::class,'Index'])->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// admin group middleware
Route::middleware(['auth','role:admin'])->group(function(){


    Route::get('/admin/dashboard',[AdminController::class,'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout',[AdminController::class,'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile',[AdminController::class,'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store',[AdminController::class,'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password',[AdminController::class,'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password',[AdminController::class,'AdminUpdatePassword'])->name('admin.update.password');


}); // end group admin middleware


// agent group middleware
Route::middleware(['auth','role:agent'])->group(function(){
    Route::get('/agent/dashboard',[AgentController::class,'AgentDashboard'])->name('agent.dashboard');
}); // end group agent middleware


// admin group middleware
Route::middleware(['auth','role:admin'])->group(function(){

    // Certificate Controller group
    Route::controller(CertificateController::class)->group(function(){
        Route::get('/admin/view_certificate','view_certificate')->name('admin.view_certificate');
        Route::get('/admin/add_certificate','add_certificate')->name('admin.add_certificate');
        Route::post('/admin/upload_certificate','upload_certificate')->name('admin.upload_certificate');

        Route::get('/admin/edit_certificate/{id}','edit_certificate')->name('admin.edit_certificate');
        Route::post('/admin/update_certificate/{id}','update_certificate')->name('admin.update_certificate');
        Route::get('/admin/delete_certificate/{id}','delete_certificate')->name('admin.delete_certificate');
    
    });
    // About Controller group
    Route::controller(AboutController::class)->group(function(){
        Route::get('/admin/view_about','view_about')->name('admin.view_about');
        Route::post('/admin/view_about','saveAbout')->name('admin.saveAbout');

        //FAQ
        Route::get('/admin/view_faq','view_faq')->name('admin.view_faq');
        Route::get('/admin/add_faq','add_faq')->name('admin.add_faq');
        Route::post('/admin/upload_faq','upload_faq')->name('admin.upload_faq');
        Route::get('/admin/delete_faq/{id}','delete_faq')->name('admin.delete_faq');
    });

    // Product Controller group
    Route::controller(ProductController::class)->group(function(){
        Route::get('/admin/view_category', 'view_category')->name('admin.view_category');
        Route::post('/admin/upload_category', 'upload_category')->name('admin.upload_category');
        Route::get('/admin/edit_category/{id}', 'edit_category')->name('admin.edit_category');
        Route::post('/admin/update_category/{id}', 'update_category')->name('admin.update_category');
        Route::get('/admin/delete_category/{id}', 'delete_category')->name('admin.delete_category');


        Route::get('/admin/view_subcategory', 'view_subcategory')->name('admin.view_subcategory');

        Route::get('/admin/view_product', 'view_product')->name('admin.view_product');
        Route::get('/admin/add_product', 'add_product')->name('admin.add_product');
    });


}); // end group admin middleware

