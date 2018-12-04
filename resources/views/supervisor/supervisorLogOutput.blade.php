@extends('supervisorLayout')

@section('content')

<div class="columns">
  <div class="column is-three-quarters p-xxs">
  </div>
  <div class="column  p-xxs">
    <span class="textsmallbold">Patient Name: <span class="textsmall">{{$log->client->firstName}} {{$log->client->lastName}}</span>
  </div>
</div>
<div class="columns">
  <div class="column is-three-quarters p-xxs">
  </div>
  <div class="column  p-xxs">
    <span class="textsmallbold">Patient #: <span class="textsmall">{{$log->client->ssn}}</span>
  </div>
</div>
<div class="columns">
  <div class="column is-half p-xxs">
  </div>
  <div class="column p-xxs">
    <div class="control">
      <label class="radio">
        <input type="radio" name="answer" checked>
        Baby
      </label>
      <label class="radio">
        <input type="radio" name="answer">
        Mother
      </label>
    </div>
  </div>
  <div class="column  p-xxs">
    <span class="textsmallbold">Client #: <span class="textsmall">{{$log->client->ssn}}</span>
  </div>
</div>
<div class="columns">
  <div class="column p-xxs">
    <span class="textsmallbold">Date Supplemental Entered:</span><span>{{$log->updated_at}}</span>
  </div>
  <!-- <div class="column is-2 p-xxs">
    <span class="textsmallbold">Initials:</span><span>HS</span>
  </div> -->
  <div class="column p-xxs">
    <span class="textsmallbold">Date HVL Entered:</span><span>{{$log->created_at}}</span>
  </div>
  <!-- <div class="column p-xxs">
    <span class="textsmallbold">Initials:</span><span>HS</span>
  </div> -->
</div>
<div class="columns">
  <div class="column p-xxs">
    <span class="textsmallbold">Date:</span><span>{{$log->date}}</span>
  </div>
  <!-- <div class="column p-xxs">
    <span class="textsmallbold">Family Level:</span><span>2</span>
  </div> -->
  <div class="column p-xxs">
    <span class="textsmallbold">Begin Time:</span><span>{{$log->time}}</span>
  </div>
  <!-- <div class="column p-xxs">
    <span class="textsmallbold">End Time:</span><span>9:55 am</span>
  </div> -->
  <div class="column p-xxs">
    <span class="textsmallbold">Visit Type:</span><span>{{$log->visit_type}}</span>
  </div>
</div>
<div class="columns">
  <div class="column p-xxs">
    <span class="textsmallbold">FSW Assigned:</span><span>{{$log->user->name}}</span>
  </div>
  <div class="column p-xxs">
    <span class="textsmallbold">Visit Made By:</span><span>{{$log->user->name}}</span>
  </div>
  <!-- <div class="column p-xxs">
    <span class="textsmallbold">Visit Completed By:</span><span>FSW Pro 4444</span>
  </div> -->
</div>
<div class="columns">
  <div class="column p-xxs">
    <span class="textsmallbold">Referral Made to Local Agency for: Indicate A-Accepted Referrals D-Denied Referrals</span>
  </div>
</div>
<div class="columns">
  @if ($log->basic_care == "true")
    <div class="column p-xxs">
      <span>{{$log->basic_care}}</span>
    </div>
  @endif
  @if ($log->childcare == "true")
  <div class="column p-xxs">
    <span>{{$log->childcare}}</span>
  </div>
  @endif
  @if ($log->transportation == "true")
  <div class="column p-xxs">
    <span>Transportation - A</span>
  </div>
  @endif
  @if ($log->smoking == "true")
  <div class="column p-xxs">
    <span>Smoking Cessitation - A</span>
  </div>
  @endif
  @if ($log->dv == "true")
  <div class="column p-xxs">
    <span>DV - A</span>
  </div>
  @endif
  @if ($log->education == "true")
  <div class="column p-xxs">
    <span>Education - A</span>
  </div>
  @endif
  @if ($log->employment == "true")
  <div class="column p-xxs">
    <span>Employment - A</span>
  </div>
  @endif
  @if ($log->first_steps == "true")
  <div class="column p-xxs">
    <span>First-Steps - A</span>
  </div>
  @endif
  @if ($log->health_department == "true")
  <div class="column p-xxs">
    <span>health_department - A</span>
  </div>
  @endif
  @if ($log->mental_health == "true")
  <div class="column p-xxs">
    <span>mental_health - A</span>
  </div>
  @endif
  @if ($log->na == "true")
  <div class="column p-xxs">
    <span>na - A</span>
  </div>
  @endif
  @if ($log->oral_hygiene == "true")
  <div class="column p-xxs">
    <span>oral_hygiene - A</span>
  </div>
  @endif
  @if ($log->physician == "true")
  <div class="column p-xxs">
    <span>physician - A</span>
  </div>
  @endif
  @if ($log->substance_abuse == "true")
  <div class="column p-xxs">
    <span>na - A</span>
  </div>
  @endif
  @if ($log->transportation == "true")
  <div class="column p-xxs">
    <span>transportation - A</span>
  </div>
  @endif
  @if ($log->other_referral == "true")
  <div class="column p-xxs">
    <span>other_referral - A</span>
  </div>
  @endif


</div>
<div class="columns">
  <div class="column p-xxs">
    <span class="textsmallbold">* Document any details describing referral(s) made in these areas on the parent's Service Record (CH-3A)</span>
  </div>
</div>

<div class="columns">
  <div class="column p-xxs">
    <span class="textsmallbold">Person's Present in Visit:</span>
  </div>
</div>

<div class="columns">
      @if ($log->mother == "true")
      <div class="column p-xxs">
        <span>mother</span>
      </div>
      @endif
      @if ($log->father == "true")
      <div class="column p-xxs">
        <span>father</span>
      </div>
      @endif
      @if ($log->temporary_custodian == "true")
      <div class="column p-xxs">
        <span>temporary_custodian</span>
      </div>
      @endif
      @if ($log->baby == "true")
      <div class="column p-xxs">
        <span>baby</span>
      </div>
      @endif
      @if ($log->grandparent == "true")
      <div class="column p-xxs">
        <span>grandparent</span>
      </div>
      @endif
      @if ($log->interpreter == "true")
      <div class="column p-xxs">
        <span>interpreter</span>
      </div>
      @endif
      @if ($log->friend == "true")
      <div class="column p-xxs">
        <span>friend</span>
      </div>
      @endif
      @if ($log->sibling == "true")
      <div class="column p-xxs">
        <span>sibling</span>
      </div>
      @endif
      @if ($log->other_person == "true")
      <div class="column p-xxs">
        <span>other-person</span>
      </div>
      @endif
</div>
<div class="columns">
  <div class="column is-three-quarters p-xxs">
    <span class="textsmallbold">Do you have any concerns regarding your child's development, behavior, or learning? </span>
  </div>
  <div class="column p-xxs">
    <span>
      <div class="control">
        @if ($log->concerns == "1")
        <label class="radio">
          <input type="radio" name="foobar" checked>
          Yes
        </label>
        @elseif($log->concerns == "0")
        <label class="radio">
          <input type="radio" name="foobar" checked>
          No
        </label>
        @endif
      </div>
    </span>
  </div>
</div>
<div class="columns">
  <div class="column p-xxs">
    <span class="textsmallbold">Status of Home: </span>
    @if ($log->clean == "true")
      <span>clean,</span>
    @endif
    @if ($log->pets == "true")
      <span>pets,</span>
    @endif
    @if ($log->home_smoking == "true")
      <span>smoking in home, </span>
    @endif
    @if ($log->safe == "true")
      <span>safe, </span>
    @endif
    @if ($log->toys == "true")
      <span>age-appropriate toys available, </span>
    @endif
    @if ($log->home_other == "true")
      <span>Other issues in home</span>
    @endif
  </div>
</div>
<div class="columns">
  <div class="column p-xxs">
    <span class="textsmallbold">Status of person(s) participating in the visit: </span>
    @if ($log->engages == "true")
      <span>engages in visit,  </span>
    @endif
    @if ($log->difficult == "true")
      <span>difficult to engage, </span>
    @endif
    @if ($log->attentive == "true")
      <span>attentive, </span>
    @endif
    @if ($log->redirection == "true")
      <span>parent needed redirection, </span>
    @endif
    @if ($log->person_additional == "true")
      <span>{{$log->person_additional}}</span>
    @endif

  </div>
</div>
<div class="columns">
  @if ($log->ggk == "true")
  <div class="column p-xxs is-1">
    <span class="textsmallbold">GGK</span>
  </div>
  @endif
  @if ($log->ggf == "true")
  <div class="column p-xxs is-1">
    <span class="textsmallbold">GGF</span>
  </div>
  @endif
  <div class="column p-xxs">
    <span class="textsmallbold">{{$log->curriculum_age}}</span>
  </div>
  <div class="column p-xxs is-half">
    <span></span>
  </div>
</div>
<div class="columns">
  <div class="column m-l-sm p-xxs">
      <span class="textsmallbold">Module: </span><span> {{$log->module}}</span>
  </div>
</div>
<div class="columns">
  <div class="column m-l-sm p-xxs">
      <span class="textsmallbold">Activity: </span><span> {{$log->activity}}</span>
  </div>
</div>
<div class="columns">
  <div class="column  m-l-sm p-xxs">
      <span class="textsmallbold">Subsection: </span><span> {{$log->subsection}}</span>
  </div>
</div>
<div class="columns">
  <div class="column  m-l-sm p-xxs">
      <span class="textsmallbold">Handout: </span><span> {{$log->handout}}</span>
  </div>
</div>
<div class="columns">
  <div class="column m-l-sm p-xxs">
      <span class="textsmallbold">Demo: </span><span> {{$log->demo}}</span>
  </div>
</div>
<div class="columns">
  <div class="column p-xxs">
      <span class="textsmallbold">List any additional subsections, activities or handouts utilized during the visit: </span>
  </div>
</div>
<div class="columns">
  <div class="column m-l-sm p-xxs">
      <span>{{$log->additional}}</span>
  </div>
</div>
<div class="columns">
  <div class="column p-xxs">
      <span class="textsmallbold">List any other materials utilized during the visit:</span>
  </div>
</div>
<div class="columns">
  <div class="column m-l-sm p-xxs">
      <span>{{$log->materials}}</span>
  </div>
</div>
<div class="columns">
  <div class="column p-xxs">
      <span class="textsmallbold">Forms completed:</span>
      @if ($log->asq == "true")
        <span>asq, </span>
      @endif
      @if ($log->asq_se == "true")
        <span>asq-se, </span>
      @endif
      @if ($log->child_status == "true")
        <span>child_status, </span>
      @endif
      @if ($log->home_inventory == "true")
        <span>home_inventory, </span>
      @endif
      @if ($log->childproofing == "true")
        <span>childproofing, </span>
      @endif
      @if ($log->consent == "true")
        <span>consent, </span>
      @endif
      @if ($log->eds == "true")
        <span>eds, </span>
      @endif
      @if ($log->goal == "true")
        <span>goal, </span>
      @endif
      @if ($log->caregiver_status == "true")
        <span>caregiver_status, </span>
      @endif
      @if ($log->health_progress == "true")
        <span>health_progress, </span>
      @endif
      @if ($log->hippa == "true")
        <span>hippa, </span>
      @endif
      @if ($log->hippa == "true")
        <span>hippa, </span>
      @endif
      @if ($log->dv_screen == "true")
        <span>dv_screen, </span>
      @endif
      @if ($log->mandatory == "true")
        <span>mandatory, </span>
      @endif
      @if ($log->partnership == "true")
        <span>partnership, </span>
      @endif
      @if ($log->contact_information == "true")
        <span>contact_information, </span>
      @endif
      @if ($log->service_record == "true")
        <span>service_records </span>
      @endif
  </div>
</div>
<div class="columns">
  <div class="column p-xxs">
    <span class="textsmallbold">Parent/Child Interaction (describe behaviors and activities observed between the parent and child):</span>
  </div>
</div>
<div class="columns">
  <div class="column p-xxs centertext">
    <span class="textsmallbold ">Cues</span>
  </div>
  <div class="column p-xxs centertext">
    <span class="textsmallbold ">Expressions</span>
  </div>
  <div class="column p-xxs centertext">
    <span class="textsmallbold ">Empathy</span>
  </div>
</div>
<div class="columns">
  <div class="column p-xxs centertext">
    <span>{{$log->cue}}</span>
  </div>
  <div class="column p-xxs centertext">
    <span>{{$log->expression}}</span>
  </div>
  <div class="column p-xxs centertext">
    <span>{{$log->empathy}}</span>
  </div>
</div>
<!-- <div class="columns">
  <div class="column p-xxs">
    <span class="textsmallbold">Strengths/concerns addressed:</span>
  </div>
</div>
<div class="columns">
  <div class="column m-l-sm p-xxs">
    <span>Mom talked about how baby is crying more and thinks maybe it is teething.</span>
  </div>
</div> -->
<div class="columns">
  <div class="column p-xxs">
    <span class="textsmallbold">Action tool: </span>
    @if ($log->atp == "true")
      <span>Atp, </span>
    @endif
    @if ($log->explore_and_wonder == "true")
      <span>Explore and Wonder, </span>
    @endif
    @if ($log->problem_talk == "true")
      <span>Problem Talk,  </span>
    @endif
    @if ($log->normalizing == "true")
      <span>Normalizing,  </span>
    @endif
    @if ($log->be_present == "true")
      <span>Be Present,  </span>
    @endif
    @if ($log->satp == "true")
      <span>Satp,  </span>
    @endif

  </div>
</div>
<div class="columns">
  <div class="column  m-l-sm textsmall p-xxs">
    <span>{{$log->interaction_example}}</span>
  </div>
</div>
<div class="columns">
  <div class="column p-xxs">
    <span class="textsmallbold">Daily Do's: </span>
    @if ($log->eparenting == "true")
      <span>Eparenting, </span>
    @endif
    @if ($log->character_builders == "true")
      <span>Character Builders, , </span>
    @endif
    @if ($log->brain_builders == "true")
      <span>Brain Builders,  </span>
    @endif
    @if ($log->four_steps == "true")
      <span>Four Steps,  </span>
    @endif
    @if ($log->play_by_play == "true")
      <span>Play by Play,  </span>
    @endif
    @if ($log->body_builders == "true")
      <span>Body Builders  </span>
    @endif
  </div>
</div>
<div class="columns">
  <div class="column  m-l-sm textsmall p-xxs">
    <span>{{$log->daily_dos_example}}</span>
  </div>
</div>
<div class="columns">
  <div class="column p-xxs">
    <span class="textsmallbold">Progress made by family towards goals: </span>
    @if ($log->to_be_established == "true")
      <span>Goal to be established,   </span>
    @endif
    @if ($log->set_at_visit == "true")
      <span>Goal set at visit,   </span>
    @endif
    @if ($log->progression == "true")
      <span>Progression,  </span>
    @endif
    @if ($log->partner_involved == "true")
      <span>Partner invovled  </span>
    @endif
    @if ($log->barriers == "true")
      <span>Barriers  </span>
    @endif
  </div>
</div>
<div class="columns">
  <div class="column  m-l-sm textsmall p-xxs">
    <span>Baby is standing a little and almost walking! </span>
  </div>
</div>

<div class="columns">
  <div class="column p-xxs">
    <span class="textsmallbold">Narrative: Describe how person(s) present responded to materials, activities and modules, etc.:</span>
  </div>
</div>
<div class="columns">
  <div class="column  m-l-sm textsmall p-xxs">
    <span>{{$log->narrative}}
     </span>
  </div>
</div>

<div class="columns">
  <div class="column p-xxs">
    <span class="textsmallbold">Referrals accepted at last visit were acted upon by family:</span>
    <span>
  </div>
  <div class="column p-xxs">
      <div class="control">
        @if ($log->referrals_last_visit == 1)
        <label class="radio">
          <input type="radio" name="foobar" checked>
          Yes
        </label>
        @elseif ($log->referrals_last_visit == 0)
        <label class="radio">
          <input type="radio" name="foobar" checked>
          No
        </label>
        @elseif ($log->referrals_last_visit == 2)

        <label class="radio">
          <input type="radio" name="foobar" checked>
          None made at last visit
        </label>

        @endif
      </div>
    </span>
  </div>
</div>
<div class="columns">
  <div class="column p-xxs">
    <span class="textsmallbold">Explain: </span><span> {{$log->referral_text}}</span>
  </div>
</div>
<div class="columns">
  <div class="column p-xxs">
    <span class="textsmallbold">Follow up plans:</span>
    <span>
  </div>
</div>
<div class="columns">
  <div class="column m-l-sm p-xxs">
    <span class="textsmallbold">Module: </span><span> {{$log->follow_up_module}}</span>
  </div>
</div>
<div class="columns">
  <div class="column m-l-sm p-xxs">
    <span class="textsmallbold">Activity: </span><span> {{$log->follow_up_activity}}</span>
  </div>
</div>
<div class="columns">
  <div class="column m-l-sm p-xxs">
    <span class="textsmallbold">Next visit: </span><span> {{$log->next_visit}}</span>
  </div>
</div>

<div class="testsmall">
  <span>Signed:</span>
</div>
<div class="columns">
  <div class="column m-t-md p-xxs textmedium">
    <span>{{$log->user->name}}</span>
  </div>
  <div class="column m-t-md p-xxs m-b-xxl textmedium">
    <span>{{$log->updated_at}}</span>
  </div>
</div>
@endsection
