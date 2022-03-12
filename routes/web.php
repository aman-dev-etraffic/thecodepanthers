<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController2;
use App\Http\Controllers\RegisterController3;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TCPAjaxRequestsController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ApprovedformController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UpdateformController;
use App\Http\Controllers\UserportfolioController;
use App\Mail\user_registration_mail;
use App\Mail\WelcomeMail;
use Illuminate\Mail\Mailable;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contactus-form',[ContactusController::class,'index'])->name('contactus-form');
Route::get('/aboutus-form',[AboutusController::class,'index'])->name('aboutus-form');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/register-step2', [RegisterController2::class, 'registerStep2'])->name('register-step2');
    Route::post('/register-step2', [RegisterController2::class, 'create'])->name('register-step2');
    Route::get('/register-step3', [RegisterController3::class, 'registerStep3'])->name('register-step3');
    Route::post('/register-step3', [RegisterController3::class, 'create'])->name('register-step3');
    Route::get('ajaxrequests/states/{id}', [TCPAjaxRequestsController::class, 'getStates'])->name('states');
    Route::get('/portfolio-form', [PortfolioController::class,'index'])->name('portfolio-form');
    Route::post('/portfolio-form', [PortfolioController::class,'store'])->name('portfolio-form');
    Route::get('/approved-form', [ApprovedformController::class,'index'])->name('approved-form');
    Route::get('/user/portfolio',[UserportfolioController::class,'index'])->name('portfolio_data');
    Route::get('/user/portfolio-approval-form',[ApprovedformController::class,'approvalform'])->name('portfolio_approval');
    Route::get('/user/display_all_portfolio/{id}',[PortfolioController::class,'getportfoliodata'])->name('display_all_portfolio');
    Route::get('/edit-form/{id}', [UpdateformController::class,'edit'])->name('edit_form');
    Route::post('/edit-form/{id}', [UpdateformController::class,'update'])->name('update_form');
    Route::get('/user/delete/{id}', [UpdateformController::class,'delete'])->name('edit_form');


    // Admin Routes
    Route::get('/admin/dashboard', [AdminController::class,'index'])->name('admin_dashboard');
    // Route::post('admin-login', [AdminController::class,'index'])->name('admin-login');
   // Route::get('/edit-form/{id}', [UpdateformController::class,'edit'])->name('edit_form');
    //Route::post('/edit-form/{id}', [UpdateformController::class,'update'])->name('update_form');
    Route::get('/delete/{id}', [AdminController::class,'deleteuser'])->name('edit_form');
    Route::post('/admin/ajaxrequest/{id}', [TCPAjaxRequestsController::class,'approveprofile'])->name('approve_profile');
    Route::get('/admin/user-portfolio-display/{id}', [AdminController::class,'userportfoliodisplay'])->name('user_portfolio_display');
    Route::post('/admin/ajaxrequest_user_portfolio/{id}', [TCPAjaxRequestsController::class,'approveuserportfolio'])->name('approve_user_portfolio');
});
