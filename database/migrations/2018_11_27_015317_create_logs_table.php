<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('date');
            $table->string('time');
            $table->string('visit_type');
            $table->string('basic_care');
            $table->string('childcare');
            $table->string('dv');
            $table->string('education');
            $table->string('employment');
            $table->string('first_steps');
            $table->string('health_department');
            $table->string('mental_health');
            $table->string('na');
            $table->string('oral_hygiene');
            $table->string('physician');
            $table->string('smoking');
            $table->string('substance_abuse');
            $table->string('transportation');
            $table->string('other_referral');
            $table->string('mother');
            $table->string('father');
            $table->string('temporary_custodian');
            $table->string('baby');
            $table->string('grandparent');
            $table->string('interpreter');
            $table->string('friend');
            $table->string('sibling');
            $table->string('other_person');
            $table->string('concerns');
            $table->string('clean');
            $table->string('pets');
            $table->string('home_smoking');
            $table->string('safe');
            $table->string('toys');
            $table->string('home_other');
            $table->string('engages');
            $table->string('difficult');
            $table->string('attentive');
            $table->string('redirection');
            $table->string('person_additional');
            $table->string('ggf');
            $table->string('ggk');
            $table->string('curriculum_age');
            $table->string('module');
            $table->string('activity');
            $table->string('subsection');
            $table->string('handout');
            $table->string('demo');
            $table->string('additional');
            $table->string('materials');
            $table->string('asq');
            $table->string('asq_se');
            $table->string('child_status');
            $table->string('home_inventory');
            $table->string('childproofing');
            $table->string('consent');
            $table->string('eds');
            $table->string('goal');
            $table->string('caregiver_status');
            $table->string('health_progress');
            $table->string('hippa');
            $table->string('dv_screen');
            $table->string('mandatory');
            $table->string('partnership');
            $table->string('contact_information');
            $table->string('service_record');
            $table->string('cue');
            $table->string('expression');
            $table->string('empathy');
            $table->string('atp');
            $table->string('explore_and_wonder');
            $table->string('problem_talk');
            $table->string('normalizing');
            $table->string('be_present');
            $table->string('satp');
            $table->string('interaction_example');
            $table->string('eparenting');
            $table->string('character_builders');
            $table->string('brain_builders');
            $table->string('four_steps');
            $table->string('play_by_play');
            $table->string('body_builders');
            $table->string('daily_dos_example');
            $table->string('to_be_established');
            $table->string('set_at_visit');
            $table->string('progression');
            $table->string('partner_involved');
            $table->string('barriers');
            $table->string('narrative');
            $table->string('referrals_last_visit');
            $table->string('referral_text');
            $table->string('follow_up');
            $table->string('follow_up_module');
            $table->string('follow_up_activity');
            $table->string('next_visit');
            $table->string('next_visit_month');
            $table->string('next_visit_day');
            $table->string('next_visit_year');
            $table->string('fsw_signature');
            $table->string('fsw_date');
            $table->string('supervisor_signature');
            $table->string('supervisor_date');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs');
    }
}
