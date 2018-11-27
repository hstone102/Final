<?php

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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/initialScreen', function () {
    return view('initialScreen');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/reportIssue', function () {
    return view('reportIssue');
});


Route::get('/supervisorVisitReport', function () {
    return view('supervisor.supervisorVisitReport');
});

Route::get('/supervisorReviewEvent', function () {
    return view('supervisor.supervisorReviewEvent');
});

Route::get('/supervisorReviewChart', function () {
    return view('supervisor.supervisorReviewChart');
});

Route::get('/supervisorProjectedCalendar', function () {
    return view('supervisor.supervisorProjectedCalendar');
});

Route::get('/supervisorEmployeeDashboard', function () {
    return view('supervisor.supervisorEmployeeDashboard');
});

Route::get('/supervisorDashboard', function () {
    return view('supervisor.supervisorDashboard');
});
Route::get('/supervisorNewClient', function () {
    return view('supervisor.supervisorNewClient');
});

Route::get('/supervisorInputData', function () {
    return view('supervisor.supervisorInputData');
});





Route::get('/employeeChartReview', function () {
    return view('employee.employeeChartReview');
});

Route::get('/employeeDashboard', function () {
    return view('employee.employeeDashboard');
});

Route::get('/employeeInputContact', function () {
    return view('employee.employeeInputContact');
});

Route::get('/employeeInputData', function () {
    return view('employee.employeeInputData');
});

Route::get('/employeeInputVisit', function () {
    return view('employee.employeeInputVisit');
});

Route::get('/employeeProjectedCalendar', function () {
    return view('employee.employeeProjectedCalendar');
});

Route::get('/employeeVisitReport', function () {
    return view('employee/employeeVisitReport');
});

Route::get('/employeeUrgentNeeds', function () {
    return view('employee/employeeUrgentNeeds');
});

Route::get('/employeeContactOutput', function () {
    return view('employee/employeeContactOutput');
});

Route::get('/employeeLogOutput', function () {
    return view('employee/employeeLogOutput');
});

Route::get('/home', function () {
  if (\Auth::user()->supervisor) {
    return view('supervisor/supervisorDashboard');
  }
  else {
    return view('employee/employeeDashboard');
  }
});

Route::post('/contacts', 'ContactController@store')->middleware('auth');

Route::post('/logs', 'LogsController@store')->middleware('auth');
