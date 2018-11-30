<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class LogsController extends Controller
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

      $tz= 'America/Kentucky/Louisville';

      $year = $request->input('log_year');
      $month = $request->input('log_month');
      $day = $request->input('log_day');
      $dt = Carbon::createFromDate($year, $month, $day);

      $hour = $request->input('log_hour');
      $minute = $request->input('log_minute');
      $seconds = "00";
      $am = $request->input('log_am_or_pm');
      $time = Carbon::createFromTime($hour, $minute, $seconds, $tz, $am);

      $nextVisitYear = $request->input('next_visit_year');
      $nextVisitMonth = $request->input('next_visit_month');
      $nextVisitDay = $request->input('next_visit_day');
      $nv = Carbon::createFromDate($nextVisitYear, $nextVisitMonth, $nextVisitDay);

      

      $log = new \App\Log;
      $log->client_id = $request->input('client_id');
      $log->date = $dt;
      $log->time = $time;
      $log->visit_type = $request->input('visit_type');
      $log->basic_care = $request->has('basic_care');
      $log->childcare = $request->has('childcare');
      $log->dv = $request->has('dv');
      $log->education = $request->has('education');
      $log->employment = $request->has('employment');
      $log->first_steps = $request->has('first_steps');
      $log->health_department = $request->has('health_department');
      $log->mental_health = $request->has('mental_health');
      $log->na = $request->has('na');
      $log->oral_hygiene = $request->has('oral_hygiene');
      $log->physician = $request->has('physician');
      $log->smoking = $request->has('smoking');
      $log->substance_abuse = $request->has('substance_abuse');
      $log->transportation = $request->has('transportation');
      $log->other_referral = $request->has('other_referral');
      $log->mother = $request->has('mother');
      $log->father = $request->has('father');
      $log->temporary_custodian = $request->has('temporary_custodian');
      $log->baby = $request->has('baby');
      $log->grandparent = $request->has('grandparent');
      $log->interpreter = $request->has('interpreter');
      $log->friend = $request->has('friend');
      $log->sibling = $request->has('sibling');
      $log->other_person = $request->has('other_person');
      $log->concerns = $request->input('concerns');
      $log->clean = $request->has('clean');
      $log->pets = $request->has('pets');
      $log->home_smoking = $request->has('home_smoking');
      $log->safe = $request->has('safe');
      $log->toys = $request->has('toys');
      $log->home_other = $request->has('home_other');
      $log->engages = $request->has('engages');
      $log->difficult = $request->has('difficult');
      $log->attentive = $request->has('attentive');
      $log->redirection = $request->has('redirection');
      $log->person_additional = $request->has('person_additional');
      $log->ggf = $request->has('ggf');
      $log->ggk = $request->has('ggk');
      $log->curriculum_age = $request->input('curriculum_age');
      $log->module = $request->input('module');
      $log->activity = $request->input('activity');
      $log->subsection = $request->input('subsection');
      $log->handout = $request->input('handout');
      $log->demo = $request->input('demo');
      $log->additional = $request->input('additional');
      $log->materials = $request->input('materials');
      $log->asq = $request->has('asq');
      $log->asq_se = $request->has('asq_se');
      $log->child_status = $request->has('child_status');
      $log->home_inventory = $request->has('home_inventory');
      $log->childproofing = $request->has('childproofing');
      $log->consent = $request->has('consent');
      $log->eds = $request->has('eds');
      $log->goal = $request->has('goal');
      $log->caregiver_status = $request->has('caregiver_status');
      $log->health_progress = $request->has('health_progress');
      $log->hippa = $request->has('hippa');
      $log->dv_screen = $request->has('dv_screen');
      $log->mandatory = $request->has('mandatory');
      $log->partnership = $request->has('partnership');
      $log->contact_information = $request->has('contact_information');
      $log->service_record = $request->has('service_record');
      $log->cue = $request->input('cue');
      $log->expression = $request->input('expression');
      $log->empathy = $request->input('empathy');
      $log->atp = $request->has('atp');
      $log->explore_and_wonder = $request->has('explore_and_wonder');
      $log->problem_talk = $request->has('problem_talk');
      $log->normalizing = $request->has('normalizing');
      $log->be_present = $request->has('be_present');
      $log->satp = $request->has('satp');
      $log->interaction_example = $request->input('interaction_example');
      $log->eparenting = $request->has('eparenting');
      $log->character_builders = $request->has('character_builders');
      $log->brain_builders = $request->has('brain_builders');
      $log->four_steps = $request->has('four_steps');
      $log->play_by_play = $request->has('play_by_play');
      $log->body_builders = $request->has('body_builders');
      $log->daily_dos_example = $request->input('daily_dos_example');
      $log->to_be_established = $request->has('to_be_established');
      $log->set_at_visit = $request->has('set_at_visit');
      $log->progression = $request->has('progression');
      $log->partner_involved = $request->has('partner_involved');
      $log->barriers = $request->has('barriers');
      $log->narrative = $request->input('narrative');
      $log->referrals_last_visit = $request->input('referrals_last_visit');
      $log->referral_text = $request->input('referral_text');
      $log->follow_up = $request->input('follow_up');
      $log->follow_up_module = $request->input('follow_up_module');
      $log->follow_up_activity = $request->input('follow_up_activity');
      $log->next_visit = $nv;
      $log->next_visit_month = $request->input('next_visit_month');
      $log->next_visit_day = $request->input('next_visit_day');
      $log->next_visit_year = $request->input('next_visit_year');
      $log->fsw_signature = $request->input('fsw_signature');
      $log->fsw_date = $request->input('fsw_date');
      $log->supervisor_signature = $request->input('supervisor_signature');
      $log->supervisor_date = $request->input('supervisor_date');
      $log->save();
      return redirect('/home');
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
