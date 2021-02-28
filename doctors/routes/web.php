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

Route::get('clear', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('storage:link');
    return 'DONE'; //Return anything
});

/////////////////////////frontend routes////////////////////////////////

Route::get('/','frontend\FrontendController@index');
Route::get('/contact','frontend\FrontendController@contact')->name('contact');

Route::get('/corona-test','frontend\FrontendController@coronatest')->name('coronatest');
Route::get('/gallery','frontend\FrontendController@gallery')->name('gallery');
Route::get('/all-doctors','frontend\FrontendController@doctors')->name('doctors');

Route::get('/user/login','frontend\FrontendController@userlogin')->name('userlogin');

Route::get('user/registration','frontend\FrontendController@registerindex')->name('register.index');

Route::get('/patient/registration','frontend\FrontendController@patientregister')->name('patient.register');
Route::get('/doctor/registration','frontend\FrontendController@doctorregister')->name('doctor.register');
Route::post('/patient/store','frontend\RegisterController@patientstore')->name('patient.store');
Route::post('/doctor/store','frontend\RegisterController@doctorstore')->name('doctor.store');

Route::get('/gallery','frontend\FrontendController@gallery')->name('gallery');
Route::get('/search/doctor', 'frontend\SearchController@doctor_search')->name('doctor.search');
Route::post('/contact/store','frontend\ContactController@store')->name('contact.store');

//Create appointment
Route::post('/appoint/store/{id}','frontend\AppointmentController@appointstore')->name('appoint.store');
Route::get('/appointment/success','frontend\AppointmentController@appointsuccess')->name('appoint.success');

Auth::routes();

/*User dashboard*/
Route::group(['prefix'=>'user','namespace'=>'frontend','middleware'=>['auth','user']], function(){
    
    Route::get('/dashboard','DashboardController@user_dashboard')->name('user.dashboard');
    Route::get('/profile','DashboardController@user_profile')->name('user.profile');
    Route::get('edit/profile','DashboardController@user_edit_profile')->name('user.edit.profile');
    Route::post('update/profile/{id}','DashboardController@user_update_profile')->name('user.update.profile');
    Route::get('/change/password','DashboardController@user_change_password')->name('user.change.password');
    Route::post('/update/password','DashboardController@user_update_password')->name('user.update.password');
    
    //doctor
    Route::get('/all-patient','DoctorController@all_patient')->name('all.patient');
    Route::get('/pending-patient','DoctorController@pending_patient')->name('pending.patient');
    Route::get('/approved-patient','DoctorController@approved_patient')->name('approved.patient');
    Route::get('/rejected-patient','DoctorController@rejected_patient')->name('rejected.patient');
    Route::get('/visited-patient','DoctorController@visited_patient')->name('visited.patient');
    
    Route::get('/chamber-patient/{id}','DoctorController@chamber_patient')->name('chamber.patient');

    Route::post('/patient-status/{id}','DoctorController@patient_status')->name('patient.status');
    Route::get('/patient-delete/{id}','DoctorController@patient_delete')->name('patient.delete');
    
    Route::get('/chambers','DoctorController@chambers')->name('chambers');
    Route::get('/create-compounder','DoctorController@create_compounder')->name('create.compounder');
    Route::post('/compounder-store','DoctorController@compounder_store')->name('compounder.store');
    Route::get('/compounder-list','DoctorController@compounder_list')->name('compounder.list');
    Route::get('/compounder-delete/{id}','DoctorController@compounder_delete')->name('compounder.delete');
    Route::get('/chamber/add','DoctorController@chamber_add')->name('chamber.add');
    Route::post('/chamber/store','DoctorController@chamber_store')->name('chamber.store');
    Route::get('/chamber/edit/{id}','DoctorController@chamber_edit')->name('chamber.edit');
    Route::post('/chamber/update/{id}','DoctorController@chamber_update')->name('chamber.update');
    Route::get('/chamber-delete/{id}','DoctorController@chamber_delete')->name('chamber.delete');
    
    //patient
    Route::get('/patient-all-serial','PatientController@patient_all_serial')->name('patient.all.serial');
    Route::get('/patient-visited-patient','PatientController@patient_visited_serial')->name('patient.visited.serial');
    
    //compounder
    Route::get('/compounder-all-patient','CompounderController@compounder_all_patient')->name('compounder.all.patient');
    Route::get('/compounder-pending-patient','CompounderController@compounder_pending_patient')->name('compounder.pending.patient');
    Route::get('/compounder-approved-patient','CompounderController@compounder_approved_patient')->name('compounder.approved.patient');
    Route::get('/compounder-rejected-patient','CompounderController@compounder_rejected_patient')->name('compounder.rejected.patient');
    Route::get('/compounder-visited-patient','CompounderController@compounder_visited_patient')->name('compounder.visited.patient');
    

    
});



Route::group(['prefix'=>'admin','middleware'=>['auth','admin']], function(){

    Route::get('dashboard','backend\DashboardController@admin_dashboard')->name('admin.dashboard');
    
Route::group([ 'prefix' => '/setting','namespace' => 'backend'], function() {
    
    Route::get('view','SiteSettingController@index')->name('setting.index');
    Route::get('edit','SiteSettingController@edit')->name('setting.edit');
    Route::post('update','SiteSettingController@update')->name('setting.update');
 
});

Route::group([ 'prefix' => '/social','namespace' => 'backend'], function() {

    Route::get('view','SocialMediaController@index')->name('social.index');
    Route::get('create','SocialMediaController@create')->name('social.create');
    Route::post('store','SocialMediaController@store')->name('social.store');
    Route::get('edit/{id}','SocialMediaController@edit')->name('social.edit');
    Route::get('show/{id}','SocialMediaController@show')->name('social.show');
    Route::post('update/{id}','SocialMediaController@update')->name('social.update');
    Route::get('destroy/{id}','SocialMediaController@destroy')->name('social.destroy');

});


Route::group([ 'prefix' => '/slider','namespace' => 'backend'], function() {

   Route::get('view','SliderController@index')->name('slider.index');
   Route::get('create','SliderController@create')->name('slider.create');
   Route::post('store','SliderController@store')->name('slider.store');
   Route::get('edit/{id}','SliderController@edit')->name('slider.edit');
   Route::post('update/{id}','SliderController@update')->name('slider.update');
   Route::get('destroy/{id}','SliderController@destroy')->name('slider.destroy');
    
});

    
});
