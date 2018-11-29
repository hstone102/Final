<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Client extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $client = new \App\Client;
      $client->firstName = $request->input('firstName');
      $client->lastName = $request->input('lastName');
      $client->ssn = $request->input('ssn');
      $client->medicaid = $request->input('medicaid');
      $client->birth_month = $request->input('birth_month');
      $client->birth_day = $request->input('birth_day');
      $client->birth_year = $request->input('birth_year');
      $client->due_month = $request->input('due_month');
      $client->due_day = $request->input('due_day');
      $client->due_year = $request->input('due_year');
      $client->ethnicity = $request->input('ethnicity');
      $client->medical_home = $request->input('medical_home');
      $client->marital_status = $request->input('marital_status');
      $client->number_of_persons = $request->input('number_of_persons');
      $client->income = $request->input('income');
      $client->insurance = $request->input('insurance');
      $client->primary_care = $request->input('primary_care');
      $client->prenatal_vitamin = $request->input('prenatal_vitamin');
      $client->nutritional_counseling = $request->input('nutritional_counseling');
      $client->smoking_in_home = $request->input('smoking_in_home');
      $client->employment_status = $request->input('employment_status');
      $client->education_enrollment = $request->input('education_enrollment');
      $client->educational_level = $request->input('educational_level');
      $client->parent_first_name = $request->input('parent_first_name');
      $client->parent_last_name = $request->input('parent_last_name');
      $client->parent_ssn = $request->input('parent_ssn');
      $client->parent_medicaid = $request->input('parent_medicaid');
      $client->partner_first_name = $request->input('partner_first_name');
      $client->partner_last_name = $request->input('partner_last_name');
      $client->partner_ssn = $request->input('partner_ssn');
      $client->partner_medicaid = $request->input('partner_medicaid');
      $client->partner_employment = $request->input('partner_employment');
      $client->partner_education = $request->input('partner_education');
      $client->partner_education_status = $request->input('partner_education_status');
      $client->save();
      dd($client);

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
