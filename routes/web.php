<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;


Route::get('/', function () {
    
    return view('welcome');
    
});

// default Route
Auth::routes();


Route::resource('profile', 'ProfileController');


// Route for user controller
Route::resource('user','UserController');


// Route for post controller
Route::resource('post','PostController');


// Route for department controller
Route::POST('/department/updated','DepartmentController@updated');


 // Route for department
Route::resource('department','DepartmentController');


// Route for status controller
Route::get('status/active/{id}','StatusssController@active');
Route::get('status/inactive/{id}','StatusssController@inactive');
Route::get('leavestatus/active/{id}','LeaveStatusController@active');
Route::get('leavestatus/inactive/{id}','LeaveStatusController@inactive');
Route::resource('status','Statusscontroller');


// Route for custom register
Route::get('new/register','CustomRegisterController@newregister')->name('new.register');
Route::POST('new/register/post','CustomRegisterController@newregisterpost')->name('new.registerpost');


// Route for admin
Route::group(['middleware'=>['auth','admin'],'prefix'=>'admin'],function(){
Route::get('dashboard', 'HomeController@index')->name('home');
Route::group(['as'=>'admin.','namespace'=>'Admin',],function(){
Route::get('dashboard','DashboardController@index')->name('dashboard');
});
});


// Route for employee dashbord 
Route::group(['as'=>'employee.','prefix'=>'employee','namespace'=>'Employee','middleware'=>['auth','employee']],function(){
Route::get('dashboard','DashboardController@index')->name('dashboard');
});



// Route for Notice board
Route::POST('/notice/updated','NoticeController@updated');
Route::resource('notice','NoticeController');




// Route for leave 
Route::POST('/add/leave','LeaveController@addleave');
Route::resource('leave','LeaveController');


// leave type management
Route::POST('leave_type/updated','Leave_typeController@updated');
Route::resource('leave_type','Leave_typeController');



// Route for Expense 
Route::POST('/expense/updated','ExpenseController@updated');
Route::resource('expense','ExpenseController');
// Route for file download
Route::get('filedownload/{id}','FileDownloadController@filedownload')->name('download');



// route for file management
Route::resource('file','FileController');


// route for file management
Route::resource('employeefile','EmployeeFileController');
Route::get('employeefile/{id}','FileeController@index');

// route for holyday
Route::POST('/holiday/updated','HolidayController@updated');
Route::resource('holiday','HolidayController');



Route::get('/attendence','AttendenceController@index');
Route::get('/attendence/clockout/{id}','AttendenceController@clockout');
Route::get('/allattendence','AttendenceController@allattendence');
Route::get('alluser/attendence','AttendenceController@adminindex');
Route::POST('/attendence','AttendenceController@clockin');
Route::get('/view/employee/attendence/{id}','AttendenceController@viewattendence');







