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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/initialScreen', function () {
    return view('initialScreen');
});

Route::get('/supervisor/supervisorVisitReport', function () {
    return view('supervisor.supervisorVisitReport');
});

Route::get('/supervisor/supervisorReviewEvent', function () {
    return view('supervisor.supervisorReviewEvent');
});

Route::get('/supervisor/supervisorReviewChart', function () {
    return view('supervisor.supervisorReviewChart');
});

Route::get('/supervisor/supervisorProjectedCalendar', function () {
    return view('supervisor.supervisorProjectedCalendar');
});

Route::get('/supervisor/supervisorEmployeeDashboard', function () {
    return view('supervisor.supervisorEmployeeDashboard');
});

Route::get('/supervisor/supervisorDashboard', function () {
    return view('supervisor.supervisorDashboard');
});





Route::get('/employee/employeeChartReview', function () {
    return view('employee.employeeChartReview');
});

Route::get('/employee/employeeDashboard', function () {
    return view('employee.employeeDashboard');
});

Route::get('/employee/employeeInputContact', function () {
    return view('employee.employeeInputContact');
});

Route::get('/employee/employeeInputData', function () {
    return view('employee.employeeInputData');
});

Route::get('/employee/employeeInputVisit', function () {
    return view('employee.employeeInputVisit');
});

Route::get('/employee/employeeProjectedCalendar', function () {
    return view('employee.employeeProjectedCalendar');
});

Route::get('/employee/employeeVisitReport', function () {
    return view('employee/employeeVisitReport');
});
