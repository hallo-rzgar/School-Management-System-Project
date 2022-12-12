<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\Setup\StudentController;
use App\Http\Controllers\Backend\Setup\StudentYearController;
use App\Http\Controllers\Backend\Setup\StudentGroupControler;
use App\Http\Controllers\Backend\Setup\StudentShiftControler;
use App\Http\Controllers\Backend\Setup\StudentFeeCategoryControler;
use App\Http\Controllers\Backend\Setup\FreeAmounteCategoryControler;
use App\Http\Controllers\AdminController;


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
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

//User Management All Routes
Route::prefix('users')->group(function () {
    Route::get('/view', [UserController::class, 'UserView'])->name('user.view');
    Route::get('/add', [UserController::class, 'UserAdd'])->name('user.add');
    Route::post('/store', [UserController::class, 'UserStore'])->name('user.store');
    Route::get('/edit/{id}', [UserController::class, 'UserEdit'])->name('user.edit');
    Route::get('/update', [UserController::class, 'UserUpdate'])->name('user.update');
    Route::post('/delete/{id}', [UserController::class, 'UserDelete'])->name('user.delete');

});
//
Route::prefix('setups')->group(function () {
    Route::get('/student/class/view',[StudentController::class ,'ViewStudent'])->name('student.class.view');
    Route::get('/student/class/add',[StudentController::class ,'AddClassStudent'])->name('student.class.add');
    Route::get('/student/class/store',[StudentController::class ,'StoreClassStudent'])->name('student.class.store');
    Route::get('/student/class/edit/{id}',[StudentController::class ,'EditClassStudent'])->name('student.class.edit');
    Route::get('/student/class/update',[StudentController::class ,'UpdateClassStudent'])->name('student.class.update');
    Route::post('/student/class/delete/{id}',[StudentController::class ,'DeleteClassStudent'])->name('student.class.delete');

    //Student Year Routes
    Route::get('/student/year/view',[StudentYearController::class ,'ViewYear'])->name('student.year.view');
    Route::get('/student/year/add',[StudentYearController::class ,'AddYear'])->name('student.year.add');
    Route::get('/student/year/store',[StudentYearController::class ,'StoreYear'])->name('student.year.store');
    Route::get('/student/year/edit/{id}',[StudentYearController::class ,'EditYear'])->name('student.year.edit');
    Route::post('/student/year/update',[StudentYearController::class ,'UpdateYear'])->name('student.year.update');
    Route::post('/student/year/delete/{id}',[StudentYearController::class ,'DeleteYear'])->name('student.year.delete');

    //Student group Routes
    Route::get('/student/group/view',[StudentGroupControler::class ,'ViewGroup'])->name('student.group.view');
    Route::get('/student/group/add',[StudentGroupControler::class ,'AddGroup'])->name('student.group.add');
    Route::get('/student/group/store',[StudentGroupControler::class ,'StoreGroup'])->name('student.group.store');
    Route::get('/student/group/edit/{id}',[StudentGroupControler::class ,'EditGroup'])->name('student.group.edit');
    Route::post('/student/group/update',[StudentGroupControler::class ,'UpdateGroup'])->name('student.group.update');
    Route::post('/student/group/delete/{id}',[StudentGroupControler::class ,'DeleteGroup'])->name('student.group.delete');

    //Student shift Routes
    Route::get('/student/shift/view',[StudentShiftControler::class ,'ViewShift'])->name('student.shift.view');
    Route::get('/student/shift/add',[StudentShiftControler::class ,'AddShift'])->name('student.shift.add');
    Route::get('/student/shift/store',[StudentShiftControler::class ,'StoreShift'])->name('student.shift.store');
    Route::get('/student/shift/edit/{id}',[StudentShiftControler::class ,'EditShift'])->name('student.shift.edit');
    Route::post('/student/shift/update',[StudentShiftControler::class ,'UpdateShift'])->name('student.shift.update');
    Route::post('/student/shift/delete/{id}',[StudentShiftControler::class ,'DeleteShift'])->name('student.shift.delete');

    //Student fee category Routes
    Route::get('/student/fee_category/view',[StudentFeeCategoryControler::class ,'ViewFeeCategory'])->name('student.fee_category.view');
    Route::get('/student/fee_category/add',[StudentFeeCategoryControler::class ,'AddFeeCategory'])->name('student.fee_category.add');
    Route::get('/student/fee_category/store',[StudentFeeCategoryControler::class ,'StoreFeeCategory'])->name('student.fee_category.store');
    Route::get('/student/fee_category/edit/{id}',[StudentFeeCategoryControler::class ,'EditFeeCategory'])->name('student.fee_category.edit');
    Route::post('/student/fee_category/update',[StudentFeeCategoryControler::class ,'UpdateFeeCategory'])->name('student.fee_category.update');
    Route::post('/student/fee_category/delete/{id}',[StudentFeeCategoryControler::class ,'DeleteFeeCategory'])->name('student.fee_category.delete');

    //Student fee category Amount Routes
    Route::get('/student/amount/view',[FreeAmounteCategoryControler::class ,'ViewFeeAmount'])->name('student.amount.view');
    Route::get('/student/amount/add',[FreeAmounteCategoryControler::class ,'AddFeeAmount'])->name('student.amount.add');
    Route::get('/student/amount/store',[FreeAmounteCategoryControler::class ,'StoreFeeAmount'])->name('student.amount.store');
    Route::get('/student/amount/edit/{id}',[FreeAmounteCategoryControler::class ,'EditFeeAmount'])->name('student.amount.edit');
    Route::post('/student/amount/update',[FreeAmounteCategoryControler::class ,'UpdateFeeAmount'])->name('student.amount.update');
    Route::post('/student/amount/delete/{id}',[FreeAmounteCategoryControler::class ,'DeleteFeeAmount'])->name('student.amount.delete');

});

