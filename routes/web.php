<?php

use Illuminate\Http\Request;
use Carbon\Carbon;

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
    $b = \App\Client::all();
    return view('supervisor.supervisorInputData', compact('b'));
});





Route::get('/employeeChartReview', function () {
    $e = \App\Client::all();
    return view('employee.employeeChartReview', compact('e'));
});

Route::get('/employeeDashboard', function () {
    return view('employee.employeeDashboard');
});

Route::get('/employeeInputContact', function () {
    $b = \App\Client::all();
    return view('employee.employeeInputContact', compact('b'));
});

Route::get('/employeeInputData', function () {
    return view('employee.employeeInputData');
});

Route::get('/employeeInputVisit', function () {
    return view('employee.employeeInputVisit');
});

Route::get('/employeeProjectedCalendar', function () {
    $logs = \App\Log::all();

    $initialMonday = Carbon::parse('first Monday of December 2018');
    $initialMonday = $initialMonday->format('MM DD YYYY');
    $initialTuesday = Carbon::parse('first Monday of December 2018')->addDays(1);
    $initialTuesday = $initialTuesday->format('MM DD YYYY');
    $initialWednesday = Carbon::parse('first Monday of December 2018')->addDays(2);
    $initialWednesday = $initialWednesday->format('MM DD YYYY');
    $initialThursday = Carbon::parse('first Monday of December 2018')->addDays(3);
    $initialThursday = $initialThursday->format('MM DD YYYY');
    $initialFriday = Carbon::parse('first Monday of December 2018')->addDays(4);
    $initialFriday = $initialFriday->format('MM DD YYYY');


    $monday = array();
    $tuesday = array();
    $wednesday = array();
    $thursday = array();
    $friday = array();

    foreach ($logs as $log) {
      $adjustedDate = Carbon::parse($log->next_visit)->format('MM DD YYYY');

      if ($initialMonday == $adjustedDate){
        array_push ($monday, $log);
      }
    }

    foreach ($logs as $log) {

      $adjustedDate = Carbon::parse($log->next_visit)->format('MM DD YYYY');

      if ($initialTuesday == $adjustedDate){
        array_push ($tuesday, $log);
      }
    }

    foreach ($logs as $log) {

      $adjustedDate = Carbon::parse($log->next_visit)->format('MM DD YYYY');

      if ($initialWednesday == $adjustedDate){
        array_push ($wednesday, $log);
      }
    }

    foreach ($logs as $log) {

      $adjustedDate = Carbon::parse($log->next_visit)->format('MM DD YYYY');

      if ($initialThursday == $adjustedDate){
        array_push ($thursday, $log);
      }
    }

    foreach ($logs as $log) {

      $adjustedDate = Carbon::parse($log->next_visit)->format('MM DD YYYY');

      if ($initialFriday == $adjustedDate){
        array_push ($friday, $log);
      }
    }

    return view('employee.employeeProjectedCalendar', compact('monday', 'tuesday', 'wednesday', 'thursday', 'friday'));

});

Route::get('/employeeVisitReport', function () {
    return view('employee/employeeVisitReport');
});

Route::get('/employeeUrgentNeeds', function () {
    return view('employee/employeeUrgentNeeds');
});

Route::get('/employeeContactOutput/{id}', function (Request $request, $id) {
    $contact = \App\Contact::find($id);
    return view('employee/employeeContactOutput', compact('contact'));
});

Route::get('/employeeLogOutput/{id}', function (Request $request) {
    $log = \App\Log::all();
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

Route::get('/employeeClientFile', function (Request $request){

  $client = \App\Client::find($request->input('client_id'));

  $contact = \App\Contact::all();
  $log = \App\Log::all();

  return view('employee/employeeClientFile', compact('client'));
});

Route::post('/contacts', 'ContactController@store')->middleware('auth');

Route::post('/logs', 'LogsController@store')->middleware('auth');

Route::post('/client', 'Client@store')->middleware('auth');
