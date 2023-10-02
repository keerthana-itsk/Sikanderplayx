<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\Master\LeadSource;
use App\Http\Controllers\Master\MasterSetting;
use App\Http\Controllers\Master\PlatFormController;
use App\Http\Controllers\Payment\DepositController;
use App\Http\Controllers\Payment\PaymentController;
use App\Http\Controllers\Payment\WithdrawController;
use App\Http\Controllers\UserRegister\UserRegistrationController;
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


// Login controller
Route::get('/',[LoginController::class,'login'])->name('login');
Route::post('post-login', [LoginController::class, 'postLogin'])->name('login.post');
Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
// End login


// Lead controller
Route::get('/lead-index',[LeadSource::class,'index'])->name('lead.index');
Route::get('/lead-create',[LeadSource::class,'create'])->name('lead.create');
Route::post('/lead-store',[LeadSource::class,'store'])->name('lead.store');
Route::get('/lead-edit/{id}',[LeadSource::class,'edit'])->name('lead.edit');
Route::put('/lead-update/{id}',[LeadSource::class, 'update'])->name('lead.update');
Route::delete('/lead-delete/{id}',[LeadSource::class, 'delete'])->name('lead.delete');
// end lead controller

// platform controller
Route::get('/platform-index',[PlatFormController::class,'index'])->name('platform.index');
Route::get('/platform-create',[PlatFormController::class,'create'])->name('platform.create');
Route::post('/platform-store',[PlatFormController::class,'store'])->name('platform.store');
Route::get('/platform-edit/{id}',[PlatFormController::class,'edit'])->name('platform.edit');
Route::put('/platform-update/{id}',[PlatFormController::class, 'update'])->name('platform.update');
Route::delete('/platform-delete/{id}',[PlatFormController::class, 'delete'])->name('platform.delete');
// end platform controller

// branch controller
Route::get('/branch-index',[BranchController::class,'index'])->name('branch.index');
Route::get('/branch-create',[BranchController::class,'create'])->name('branch.create');
Route::post('/branch-store',[BranchController::class,'store'])->name('branch.store');
Route::get('/branch-edit/{id}',[BranchController::class,'edit'])->name('branch.edit');
Route::put('/branch-update/{id}',[BranchController::class, 'update'])->name('branch.update');
Route::delete('/branch-delete/{id}',[BranchController::class, 'delete'])->name('branch.delete');
// end branch controller

// user register
Route::get('/UserRegister-index',[UserRegistrationController::class,'index'])->name('UserRegister.index');
Route::get('/UserRegister-create',[UserRegistrationController::class,'create'])->name('UserRegister.create');
Route::post('/UserRegister-store',[UserRegistrationController::class,'store'])->name('UserRegister.store');
Route::get('/UserRegister-edit\{id}',[UserRegistrationController::class,'edit'])->name('UserRegister.edit');

// Payment
Route::get('/payment-index',[PaymentController::class,'index'])->name('payment.index');
// Deposit
Route::get('/deposit-index',[DepositController::class,'index'])->name('deposit.index');
// Withdraw
Route::get('/withdraw-index',[WithdrawController::class,'index'])->name('withdraw.index');






// master settings
Route::get('/master-setting',[MasterSetting::class,'setting'])->name('master.setting');

