<?php

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

//login

Route::get( '/login', "LoginController@index" )->name( 'login' );
Route::post( '/login', "LoginController@verify" );
Route::get( '/logout', 'LogoutController@logout' )->name( 'logout' );
Route::get( '/home', 'homeController@index' )->name( 'home' );

Route::group( ['middleware' => ['sess']], function () {

//doctor route
    Route::get( '/doctorDashboard/{id}', ['uses' => 'DoctorController@doctorDashboard'] )->name( 'dashBoard' );
//updateProfile
    Route::get( '/doctor/doctorProfile/{id}', 'DoctorController@doctorProfile' )->name( 'doctorProfile' );
    //Route::post('/doctor/doctorProfile/{id}','DoctorController@updateProfile');

    Route::get( '/doctor/patientDetails/{id}', ['uses' => 'DoctorController@patientDetails'] )->name( 'patientDetails' );
    Route::get( '/doctor/patientDateApprove/{id}', ['uses' => 'DoctorController@patientDetaildate'] )->name( 'patientDetails' );
    Route::post( '/doctor/UpdatePatientDate/{id}', ['uses' => 'DoctorController@UpdatePatientDate'] )->name( 'patientDetails' );
//update
    Route::get( '/doctor/approveAppointment/{id}', ['uses' => 'DoctorController@approveAppointment'] )->name( 'approveAppointment' );
    Route::post( '/doctor/approveAppointment/{id}', ['uses' => 'DoctorController@update'] );

//insert
    
    

//Route::post('/login','loginController@index');

    //admin session
    Route::group( ['middleware' => ['adminSess']], function () {
        Route::get( '/admin/dashboard', 'adminController@dashboard' )->name( 'admin.dashboard' );
        Route::get( '/admin/addUser', 'UserControllerByAdmin@index' )->name( 'user.index' );
        Route::post( '/admin/addUser', 'UserControllerByAdmin@addUser' )->name( 'user.addUser' );
        Route::get( '/admin/changePassword', 'adminController@changePassword' )->name( 'admin.changePassword' );
        Route::post( '/admin/changePassword', 'adminController@changePasswordVerify' )->name( 'admin.changePasswordVerify' );
        Route::get( '/admin/viewUserList', 'UserControllerByAdmin@viewUserList' )->name( 'user.viewUserList' );
        Route::get( 'admin/viewUserList/search', 'UserControllerByAdmin@liveSearch' )->name( 'user.search' );
        Route::get( '/admin/myProfile', 'adminController@myProfile' )->name( 'admin.myProfile' );
        Route::post( '/admin/myProfile', 'adminController@myProfileVerify' )->name( 'admin.myProfileVerify' );
      
    } );

   

} );