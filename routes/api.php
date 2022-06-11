<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware( 'auth:api' )->get( '/user', function ( Request $request ) {
    return $request->user();
} );

Route::middleware( ['cors'] )->group( function () {
    Route::post( '/login', 'UserControllerByAdmin@login' );

    
    Route::get( '/dashboard', 'UserControllerByAdmin@dashboard' );
  
    Route::post( '/work/{id}', 'UserControllerByAdmin@editWorkSchedule' );
    Route::post( '/changePassword/{id}', 'UserControllerByAdmin@password' );
    Route::get( '/profile/{id}', 'adminController@profile' );
    

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
    Route::get( '/doctor/newApiroment/{id}', ['uses' => 'DoctorController@newApiroment'] )->name( 'newApiroment' );
    Route::post( '/doctor/newApiroment/{id}', ['uses' => 'DoctorController@insertAppointment'] )->name( 'newApiroment' );

    //Route::get('/doctor/newApiroment/{id}',['uses'=>'DoctorController@newApiroment'])->name('newApiroment');
    Route::get( '/doctor/apointmentHistory/{id}', ['uses' => 'DoctorController@apointmentHistory'] )->name( 'apointmentHistory' );
    Route::get( '/doctor/OperationTheatres/{id}', ['uses' => 'DoctorController@operationTheatres'] )->name( 'operationTheatres' );
    Route::get( '/doctor/hospitalAuthority/{id}', ['uses' => 'DoctorController@hospitalAuthority'] )->name( 'hospitalAuthority' );
    Route::get( '/doctor/feedbackReview/{id}', ['uses' => 'DoctorController@feedbackReview'] )->name( 'feedbackReview' );
    Route::get( '/doctor/help/{id}', ['uses' => 'DoctorController@help'] )->name( 'help' );
    Route::get( '/doctor/icuRoom/{id}', ['uses' => 'DoctorController@icuRoom'] )->name( 'icuRoom' );
    Route::get( '/doctor/emergencyRoom/{id}', ['uses' => 'DoctorController@emergencyRoom'] )->name( 'emergencyRoom' );
//change pass
    Route::get( '/doctor/doctorChangePass/{id}', ['uses' => 'DoctorController@doctorChangePass'] )->name( 'doctorChangePass' );
    Route::post( '/doctor/doctorChangePass/{id}', 'DoctorController@updatePassword' );
//update Information
    Route::get( '/doctor/doctorUpdateInformation/{id}', ['uses' => 'DoctorController@doctorUpdateInformation'] )->name( 'doctorUpdateInformation' );

    Route::post( '/doctor/doctorUpdateInformation/{id}', 'DoctorController@updateProfile' );

    Route::get( '/doctor/doctorCheckSalary/{id}', ['uses' => 'DoctorController@doctorCheckSalary'] )->name( 'doctorCheckSalary' );

//insert
    Route::get( '/doctor/immediateTreatment/{id}', ['uses' => 'DoctorController@immediateTreatment'] )->name( 'immediateTreatment' );
    Route::post( '/doctor/immediateTreatment/{id}', ['uses' => 'DoctorController@immediateTreatmentInsert'] )->name( 'immediateTreatment' );

    Route::get( '/doctor/checkReport/{id}', ['uses' => 'DoctorController@checkReport'] )->name( 'checkReport' );

    Route::get( '/doctor/searchPatient/{id}', ['uses' => 'DoctorController@searchPatient'] )->name( 'searchPatient' );
    Route::post( '/doctor/searchPatient/{id}', ['uses' => 'DoctorController@searchPatient'] )->name( 'searchPatient' );

    Route::get( '/SearchCourse/{keyword}', ['uses' => 'DoctorController@searchCourse'] )->name( 'searchPatient' );


//recepsionest route
    Route::get( '/home', 'homeController@index' )->name( 'logout' );
    Route::get( '/reception/dashboard/{id}', 'receptionController@index' );
   
//Route::post('/login','loginController@index');
} );