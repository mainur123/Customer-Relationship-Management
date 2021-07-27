<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Laravel\Fortify\Features;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use Laravel\Jetstream\Rules\Role;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InstallmentController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\SearchController;

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

//for user dashboard
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $users=DB::table('users')->first();
    $installments=DB::table('installments')->get();
    
    $time=strtotime($users->installment_start_from);
    $timeformate=date('d-M-Y',$time);

    return view('dashboard', compact('users', 'installments','timeformate'));
})->name('dashboard');

Route::get('/dashboard', [AdminController::class, 'UserDashBoardCal'])->name('dashboard');

//for user report
Route::middleware(['auth:sanctum', 'verified'])->get('user/user_report', function () {
    $users=DB::table('users')->first();
    $installments=DB::table('installments')->get();
    $time=strtotime($users->installment_start_from);
    $timeformate=date('d-M-Y',$time);
    return view('user.user_report', compact('users', 'installments','timeformate'));
})->name('user_report');

Route::prefix('admin')->name('admin.')->group(function()
{
    $enableViews = config('fortify.views', true);
    Route::view('/login','auth.adminlogin')->middleware('guest:admin')->name('login');
    $limiter = config('fortify.limiters.login');

    Route::post('/login', [AuthenticatedSessionController::class, 'store'])
        ->middleware(array_filter([
            'guest:admin',
            $limiter ? 'throttle:'.$limiter : null,
        ]))->name('login');

    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth:admin')
    ->name('logout');

   // Route::view('/home','admin.index')->middleware('auth:admin')->name('home');
   
    Route::get('/home', [AdminController::class, 'dashBoardCal'])->middleware('auth:admin')->name('home');

    Route::get('/all', [AdminController::class, 'all_member'])->middleware('auth:admin')->name('all');
    Route::get('/member/{id}',[AdminController::class,'profile'])->middleware('auth:admin');

    Route::get('/add_member',function()
    {
        return view('admin.add_member');
    })->middleware('auth:admin')->name('add_member');


    Route::post('/store',[AdminController::class,'add'])->middleware('auth:admin');

    Route::post('/update/{id}',[AdminController::class,'update_member'])->middleware('auth:admin');


    // ------------ Installment ----------------
    Route::get('/installment', [installmentController::class, 'show'])->middleware('auth:admin');
   
    Route::post('/installment/showingData', [installmentController::class, 'showInstallmentData'])->middleware('auth:admin');

    Route::get('/edit_payment/{id}/{no}',[installmentController::class,'edit_payment'])->middleware('auth:admin');

     //edit installment payment update
     Route::post('/installment_update/{id}/{no}',[installmentController::class,'installment_update']);
     
     //add installment payment for user
     Route::get('/payment/{id}/{no}',[installmentController::class,'installment_payment']);
 
     Route::post('/installment_payment_submit/{id}/{no}',[installmentController::class,'installment_payment_paid']);

    // ------------ Installment ----------------


    Route::get('/all_admin',[AdminController::class, 'index'])->name('view_admin')->middleware('auth:admin');
    Route::get('/create_admin',[AdminController::class, 'create_new'])->name('create_admin')->middleware('auth:admin');
    Route::post('/show',[AdminController::class, 'store_new'])->name('store')->middleware('auth:admin');

    Route::get('/edit_admin/{id}',[AdminController::class,'edit_admin'])->middleware('auth:admin');

    Route::post('/admin_update/{id}',[AdminController::class,'update_admin'])->middleware('auth:admin');

    Route::get('/delete_admin/{id}',[AdminController::class,'delete'])->middleware('auth:admin');
    Route::get('/member/{id}/viewpdf',[AdminController::class,'viewPDF']);
    Route::get('/member/{id}/pdf',[AdminController::class,'pdfDownload']);
    //for member search
    Route::get('/search',[SearchController::class,'index']);

    //Basic
    Route::get('/basic', [AdminController::class, 'basic'])->middleware('auth:admin');

    Route::get('/basic/showingData', [AdminController::class, 'basicShowDataUpdate'])->middleware('auth:admin');

    Route::post('/basic/update/{id}', [AdminController::class, 'basicUpdate'])->middleware('auth:admin');
   
});


