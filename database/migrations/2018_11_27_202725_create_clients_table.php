<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            // $table->unsignedInteger('user_id')->nullable();
            // $table->foreign('user_id')->references('id')->on('users');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('ssn');
            $table->string('medicaid');
            $table->string('birth_month');
            $table->string('birth_day');
            $table->string('birth_year');
            $table->string('due_month');
            $table->string('due_day');
            $table->string('due_year');
            $table->string('ethnicity');
            $table->string('medical_home');
            $table->string('marital_status');
            $table->string('number_of_persons');
            $table->string('income');
            $table->string('insurance');
            $table->string('primary_care');
            $table->string('prenatal_vitamin');
            $table->string('nutritional_counseling');
            $table->string('smoking_in_home');
            $table->string('employment_status');
            $table->string('education_enrollment');
            $table->string('educational_level');
            $table->string('parent_first_name');
            $table->string('parent_last_name');
            $table->string('parent_ssn');
            $table->string('parent_medicaid');
            $table->string('partner_first_name');
            $table->string('partner_last_name');
            $table->string('partner_ssn');
            $table->string('partner_medicaid');
            $table->string('partner_employment');
            $table->string('partner_education');
            $table->string('partner_education_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
