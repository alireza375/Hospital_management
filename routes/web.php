<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Demo\DemoController;
use App\Http\Controllers\Backend\DoctorController;
use App\Http\Controllers\Backend\PatientController;
use App\Http\Controllers\Backend\StaffController;
use App\Http\Controllers\Backend\AppointmentController;
use App\Http\Controllers\Backend\PublicController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/admin/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified', 'role:admin'])->name('admin.dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/delete/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin/logout', [AdminController::class, 'AdminDestroy'])->name('admin.logout');
// Route::get('admin/logout', [AdminController::class, 'AdminLogoutPage'])->name('admin.logout.page');

Route::controller(DemoController::class)->group(function () {
    Route::get('/', 'HomeMain')->name('home');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    

 });

 // Admin All Route 
  Route::middleware(['auth'])->group(function () {
   
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
  
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/profile', 'Profile')->name('admin.profile');
        
        Route::get('/admin/change/password', 'ChangePassword')->name('change.password');
        Route::post('/update/password', 'UpdatePassword')->name('update.password');
    
      Route::controller(UserController::class)->group(function(){
        Route::get('/user/dashboard','UserDashboard')->middleware(['auth', 'verified', 'role:user'])->name('user');
        Route::post('/update/user','UpdateUser')->name('user.update');
        Route::get('/user/profile', 'UserProfile')->name('user.profile');
        Route::get('/user/edit/profile', 'EditProfile')->name('edit.profile');
        Route::get('/user/change/password', 'UserChangePassword')->name('user.change.password');
        Route::post('/update/password', 'UpdatePassword')->name('update.password');
        Route::delete('/delete/user/{id}', 'deleteUser')->name('delete.user');



        // Route::post('/user/profile', 'UserProfile')->name('user.profile.store');

      });
         
    });

    Route::controller(PublicController::class)->group(function(){
      Route::get('/all/user','AllUser')->name('all.user');
        
    });

    /// Doctor All Route 
  Route::controller(DoctorController::class)->group(function(){

    Route::get('/all/doctor','AllDoctor')->name('all.doctor');
    Route::get('/add/doctor','AddDoctor')->name('add.doctor');
    Route::post('/store/doctor','StoreDoctor')->name('doctor.store');
    Route::get('/edit/doctor/{id}','EditDoctor')->name('doctor.edit');
    Route::post('/update/doctor','UpdateDoctor')->name('doctor.update');
    Route::get('/delete/doctor/{id}','DeleteDoctor')->name('doctor.delete');

    Route::get('/all/neurology','AllNeurology')->name('all.neurology');
    Route::get('/all/eyecare','AllEyecare')->name('all.eye_care');
    Route::get('/all/dental','AllDental')->name('all.dental');
    Route::get('/all/gynocology','AllGynocology')->name('all.gynocologist');


    });

    /// Patient All Route 
  Route::controller(PatientController::class)->group(function(){

    Route::get('/all/patient','AllPatient')->name('all.patient');
    Route::get('/add/patient','AddPatient')->name('add.patient');
    Route::post('/store/patient','StorePatient')->name('patient.store');
    Route::get('/delete/patient/{id}','DeletePatient')->name('patient.delete');
  
    });


    // Staffs All Route
  Route::controller(StaffController::class)->group(function(){

    Route::get('/all/staff','AllStaff')->name('all.staff');
    Route::get('/add/staff','AddStaff')->name('add.staff');
    Route::post('/store/staff','StoreStaff')->name('staff.store');
    Route::get('/edit/staff/{id}','EditStaff')->name('staff.edit');
    Route::post('/update/staff','UpdateStaff')->name('staff.update');
    Route::get('/delete/staff/{id}','DeleteStaff')->name('staff.delete');

    
  });

    // Appoinments all route
  Route::controller(AppointmentController::class)->group(function(){

    Route::get('/all/appointment','AllAppointment')->name('all.appointment');
    Route::get('/add/appointment','AddAppointment')->name('add.appointment');
    Route::post('/store/appointment','StoreAppointment')->name('appointment.store');//for admin
    Route::get('/delete/appointment/{id}','DeleteeAppointment')->name('appointment.delete');
    Route::get('/user/appointment/{id}', 'UserAppointment')->name('user.appointment');
    Route::post('/user/store/appointment','UserStoreAppointment')->name('user.appointment.store');
    Route::get('/all/user/appointment','AllUserAppointment')->name('all.user.appointment');
    

  });
  
    

});