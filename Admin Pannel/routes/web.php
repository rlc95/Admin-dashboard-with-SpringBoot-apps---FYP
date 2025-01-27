<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\Config\Admin\AdminController;
use App\Http\Controllers\Config\User\UserController;
use App\Http\Controllers\Config\Customer\CustomerController;

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

Route::get('/wel', function () {
    return view('welcome');
});


/* Main Routings */
Route::get('/home',[AuthenticateController::class,'index'])->name('home');
Route::get('authortyhome/{id}',[AdminController::class,'indexauthorty'])->name('authrtyhome');
Route::get('',[AuthenticateController::class,'index'])->name('root');


/* user */
Route::post('user_store', [UserController::class, 'userStore']);
Route::post('user_update', [UserController::class, 'userUpdate']);
Route::get('searchviewuser', [UserController::class, 'usersearch'])->name('user_Search');
Route::get('user_store', [UserController::class, 'userHome'])->name('user_home');
Route::get('UserView', [UserController::class, 'userView'])->name('user_view');
Route::get('serchauthrty', [UserController::class, 'searchauthrty'])->name('search_authrty');

/* customers */
Route::post('customer_store', [CustomerController::class, 'customerStore']);
//Route::get('customer_store', [CustomerController::class, 'customerHome'])->name('addCustomer');
Route::get('Customers/{id}', [CustomerController::class, 'customer'])->name('customer');
Route::get('searchviewcustomer', [CustomerController::class, 'customersearch'])->name('customer_Search');

/* survey */
Route::post('survy_store', [UserController::class, 'survyStore']);
Route::get('survy_data', [UserController::class, 'survyData'])->name('survey_data');
/* logout */
Route::get('Adminlogout', [AdminController::class, 'adminlogout'])->name('admin_logout');
Route::get('Authrtylogout', [AdminController::class, 'authrtylogout'])->name('authrty_logout');

Route::get('user_data', [UserController::class, 'userData'])->name('user_data');

/* login */
Route::post('login', [AdminController::class, 'authorityCheck'])->name('logincheck');
Route::get('login', [AdminController::class, 'signUp'])->name('login');


//Auth::routes(['verify' => true]);
/* User Authentication routings */
//require __DIR__ . '/auth.php';

Route::group(['middleware' => ['auth']], function () {

    /* Configuration Model Routings */
    require __DIR__ . '/config.php';
    
});
