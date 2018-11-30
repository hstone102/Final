@extends('employeeLayout')

@section('content')
<div id="client">
  <div class=" centertext m-b-xl textlarge">

  Which client would you like to input data on?

  </div>

  <div class="center">
  <div class="control centertext">
    <div class="select">
      <select id="client_select">
        <option value="0">Select dropdown</option>

        @foreach ($b as $c)
        <option value="{{$c->id}}">{{$c->firstName }} {{$c->lastName }}</option>
        @endforeach
      </select>
    </div>
  </div>
  </div>

  <div class="control centertext m-t-lg m-b-xxl">
    <button class="button is-info" onclick="selection2()">Find Client</button>
  </div>
</div>

<script>

function selection2 () {


  var x = document.getElementById("contactChoice");

  x.style.display = "block";
}
</script>



<div id="contactChoice" class="centertext m-b-md textlarge" style="display:none">

Would you like to write a log or contact?

<div class="control centertext m-b-lg m-t-md">
  <div class="select">
    <select id="select" onchange="selection()">
      <option value="0">Pick One</option>
      <option value="1">Log</option>
      <option value="2">Contact</option>
    </select>
  </div>
</div>

</div>



<script>

function selection () {

  var client_id = document.getElementById("client_select").value;
  document.getElementById("client_id").value = client_id;
  document.getElementById("log_client_id").value = client_id;
  var x = document.getElementById("contact");
  var y = document.getElementById("log");

  if (document.getElementById("select").value == "2"){
    x.style.display = "block";
    y.style.display = "none";
  }
  else if (document.getElementById("select").value == "1"){
    y.style.display = "block";
    x.style.display = "none";
  }
  else {
    y.style.display = "none";
    x.style.display = "none";
  }
}

</script>




<!-- Write out an if statement that either displays the contact form or a log form  -->
<form class="" method="post" action="/contacts">
    @csrf

    <input id="client_id" name="client_id" type="hidden" value="">
<div id="contact" style="display:none">
  <div class="textmedium">
    <div class="columns">
      <label for="name" class="column m-l-xxl"> Who was contacted</label>
      <label for="start" class="column m-l-md"> Time of Contact </label>
      <label for="end" class="column m-l-md"> End Time </label>
    </div>

      <div class="columns">
        <div class="column m-l-xxl">
          <div class="field">
            <div class="select">
              <select id="name" name="name">
                <option>Contact Person</option>
                <option>Mother</option>
                <option>Father</option>
                <option>Family Member</option>
                <option>Grandparent</option>
              </select>
            </div>
          </div>
        </div>
        <div class="column m-l-md">
          <div class="contact field is-horizontal">
              <div class="field-body">
                <div class="field is-narrow">
                  <div class="select">
                    <select id="start_hour" name="start_hour">
                      <option>Hour</option>
                      <option>01</option>
                      <option>02</option>
                      <option>03</option>
                      <option>04</option>
                      <option>05</option>
                      <option>06</option>
                      <option>07</option>
                      <option>08</option>
                      <option>09</option>
                      <option>10</option>
                      <option>11</option>
                      <option>12</option>
                    </select>
                  </div>
                </div>
                <div class="field is-narrow">
                  <div class="select">
                    <select id="start_minute" name="start_minute">
                      <option>Minute</option>
                      <option>01</option>
                      <option>02</option>
                      <option>03</option>
                      <option>04</option>
                      <option>05</option>
                      <option>06</option>
                      <option>07</option>
                      <option>08</option>
                      <option>09</option>
                      <option>10</option>
                      <option>11</option>
                      <option>12</option>
                      <option>13</option>
                      <option>14</option>
                      <option>15</optin>
                      <option>16</opton>
                      <option>17</opion>
                      <option>18</otion>
                      <option>19</ption>
                      <option>20<option>
                      <option>21</option>
                      <option>22</option>
                      <option>23</option>
                      <option>24</option>
                      <option>25</option>
                      <option>26</option>
                      <option>27</option>
                      <option>28</option>
                      <option>29</option>
                      <option>30</option>
                      <option>31</option>
                      <option>32</option>
                      <option>33</option>
                      <option>34</option>
                      <option>35</option>
                      <option>36</option>
                      <option>37</option>
                      <option>38</option>
                      <option>39</option>
                      <option>40</option>
                      <option>41</option>
                      <option>42</option>
                      <option>43</option>
                      <option>44</option>
                      <option>45</option>
                      <option>46</option>
                      <option>47</option>
                      <option>48</option>
                      <option>49</option>
                      <option>50</option>
                      <option>51</option>
                      <option>52</option>
                      <option>53</option>
                      <option>54</option>
                      <option>55</option>
                      <option>56</option>
                      <option>57</option>
                      <option>58</option>
                      <option>59</option>
                    </select>
                  </div>
                </div>
                  <div class="select">
                    <select id="start_am_or_pm" name="start_am_or_pm">
                      <option>AM/PM</option>
                      <option>AM</option>
                      <option>PM</option>
                    </select>
                  </div>
            </div>
          </div>
        </div>
        <div class="column m-l-md">
          <div class="contact field is-horizontal">
              <div class="field-body">
                <div class="field is-narrow">
                  <div class="select">
                    <select id="end_hour" name="end_hour">
                      <option>Hour</option>
                      <option>01</option>
                      <option>02</option>
                      <option>03</option>
                      <option>04</option>
                      <option>05</option>
                      <option>06</option>
                      <option>07</option>
                      <option>08</option>
                      <option>09</option>
                      <option>10</option>
                      <option>11</option>
                      <option>12</option>
                    </select>
                  </div>
                </div>
                <div class="field is-narrow">
                  <div class="select">
                    <select id="end_minute" name="end_minute">
                      <option>Minute</option>
                      <option>01</option>
                      <option>02</option>
                      <option>03</option>
                      <option>04</option>
                      <option>05</option>
                      <option>06</option>
                      <option>07</option>
                      <option>08</option>
                      <option>09</option>
                      <option>10</option>
                      <option>11</option>
                      <option>12</option>
                      <option>13</option>
                      <option>14</option>
                      <option>15</optin>
                      <option>16</opton>
                      <option>17</opion>
                      <option>18</otion>
                      <option>19</ption>
                      <option>20<option>
                      <option>21</option>
                      <option>22</option>
                      <option>23</option>
                      <option>24</option>
                      <option>25</option>
                      <option>26</option>
                      <option>27</option>
                      <option>28</option>
                      <option>29</option>
                      <option>30</option>
                      <option>31</option>
                      <option>32</option>
                      <option>33</option>
                      <option>34</option>
                      <option>35</option>
                      <option>36</option>
                      <option>37</option>
                      <option>38</option>
                      <option>39</option>
                      <option>40</option>
                      <option>41</option>
                      <option>42</option>
                      <option>43</option>
                      <option>44</option>
                      <option>45</option>
                      <option>46</option>
                      <option>47</option>
                      <option>48</option>
                      <option>49</option>
                      <option>50</option>
                      <option>51</option>
                      <option>52</option>
                      <option>53</option>
                      <option>54</option>
                      <option>55</option>
                      <option>56</option>
                      <option>57</option>
                      <option>58</option>
                      <option>59</option>
                    </select>
                  </div>
                </div>
                  <div class="select">
                    <select id="end_am_or_pm" name="end_am_or_pm">
                      <option>AM/PM</option>
                      <option>AM</option>
                      <option>PM</option>
                    </select>
                </div>
            </div>
          </div>
        </div>
      </div>



      <div class="columns">
        <label for="type" class="column m-l-xxl"> Type of Contact</label>
        <label for="date" class="column m-l-md"> Date of Contact </label>
      </div>
      <div class="columns">
        <div class="column m-l-xxl">
            <div class="select">
              <select id="type" name="type">
                <option>Type of Contact</option>
                <option>No Show</option>
                <option>Reschedule</option>
                <option>Cancel</option>
                <option>Group Event</option>
                <option>Reminder</option>
              </select>
            </div>
        </div>
        <div class="column m-l-md">
          <div class="contact field is-horizontal">
              <div class="field-body">
                <div class="field is-narrow">
                  <div class="select">
                    <select id="date_month" name="date_month">
                      <option >Month</option>
                      <option value="01">January</option>
                      <option value="02">February</option>
                      <option value="03">March</option>
                      <option value="04">April</option>
                      <option value="05">May</option>
                      <option value="06">June</option>
                      <option value="07">July</option>
                      <option value="08">August</option>
                      <option value="09">September</option>
                      <option value="10">October</option>
                      <option value="11">November</option>
                      <option value="12">December</option>
                    </select>
                  </div>
                </div>
                <div class="field is-narrow">
                  <div class="select">
                    <select id="date_day" name="date_day">
                      <option>Day</option>
                      <option>01</option>
                      <option>02</option>
                      <option>03</option>
                      <option>04</option>
                      <option>05</option>
                      <option>06</option>
                      <option>07</option>
                      <option>08</option>
                      <option>09</option>
                      <option>10</option>
                      <option>11</option>
                      <option>12</option>
                      <option>13</option>
                      <option>14</option>
                      <option>15</option>
                      <option>16</option>
                      <option>17</option>
                      <option>18</option>
                      <option>19</option>
                      <option>20</option>
                      <option>21</option>
                      <option>22</option>
                      <option>23</option>
                      <option>24</option>
                      <option>25</option>
                      <option>26</option>
                      <option>27</option>
                      <option>28</option>
                      <option>29</option>
                      <option>30</option>
                      <option>31</option>
                    </select>
                  </div>
                </div>
                <div class="field">
                  <div class="select">
                    <select id="date_year" name="date_year">
                      <option>Year</option>
                      <option>2018</option>
                      <option>2019</option>
                      <option>2020</option>
                    </select>
                  </div>
                </div>

            </div>
          </div>
        </div>
      </div>

      <div class="field is-horizontal ">
        <div class="field-label is-normal m-b-xl">
          <label for="comment" class="label m-t-xl">Describe Contact</label>
        </div>
        <div class="field-body m-b-xl m-t-xl">
          <div class="field">
            <div class="control">
              <textarea id="comment" name="comment" class="textarea" placeholder="Describe the contact here."></textarea>
            </div>
          </div>
        </div>
      </div>

      <div class="control centertext m-b-xl">
        <button class="button is-info">Submit Contact</button>
      </div>
  </div>
</div>
</form>



<form class="" method="post" action="/logs">
    @csrf

<input id="log_client_id" name="client_id" type="hidden" value="">

<div id="log" style="display:none">
  <div class="textmedium">
    <div class="columns">
      <label for="date" class="column m-l-md"> Date of Visit</label>
      <label for="time" class="column m-l-md"> Time of Visit</label>
      <label for="visit_type" class="column m-l-md"> Type of Visit</label>
    </div>
  </div>
        <div class="columns">
          <div class="column m-l-md m-b-lg">
            <div class="field-body">
              <div class="field is-narrow">
                <div class="select">
                  <select id="log_month" name="log_month">
                    <option>Month</option>
                    <option value="01">January</option>
                    <option value="02">February</option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                  </select>
                </div>
              </div>
              <div class="field is-narrow">
                <div class="select">
                  <select id="log_day" name="log_day">
                    <option>Day</option>
                    <option>01</option>
                    <option>02</option>
                    <option>03</option>
                    <option>04</option>
                    <option>05</option>
                    <option>06</option>
                    <option>07</option>
                    <option>08</option>
                    <option>09</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>21</option>
                    <option>22</option>
                    <option>23</option>
                    <option>24</option>
                    <option>25</option>
                    <option>26</option>
                    <option>27</option>
                    <option>28</option>
                    <option>29</option>
                    <option>30</option>
                    <option>31</option>
                  </select>
                </div>
              </div>
              <div class="field">
                <div class="select">
                  <select id="log_year" name="log_year">
                    <option>Year</option>
                    <option>2018</option>
                    <option>2019</option>
                    <option>2020</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="column m-l-md">
            <div class="contact field is-horizontal">
                <div class="field-body">
                  <div class="field is-narrow">
                    <div class="select">
                      <select id="log_hour" name="log_hour">
                        <option>Hour</option>
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                        <option>05</option>
                        <option>06</option>
                        <option>07</option>
                        <option>08</option>
                        <option>09</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                      </select>
                    </div>
                  </div>
                  <div class="field is-narrow">
                    <div class="select">
                      <select id="log_minute" name="log_minute">
                        <option>Minute</option>
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                        <option>05</option>
                        <option>06</option>
                        <option>07</option>
                        <option>08</option>
                        <option>09</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</optin>
                        <option>16</opton>
                        <option>17</opion>
                        <option>18</otion>
                        <option>19</ption>
                        <option>20<option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
                        <option>31</option>
                        <option>32</option>
                        <option>33</option>
                        <option>34</option>
                        <option>35</option>
                        <option>36</option>
                        <option>37</option>
                        <option>38</option>
                        <option>39</option>
                        <option>40</option>
                        <option>41</option>
                        <option>42</option>
                        <option>43</option>
                        <option>44</option>
                        <option>45</option>
                        <option>46</option>
                        <option>47</option>
                        <option>48</option>
                        <option>49</option>
                        <option>50</option>
                        <option>51</option>
                        <option>52</option>
                        <option>53</option>
                        <option>54</option>
                        <option>55</option>
                        <option>56</option>
                        <option>57</option>
                        <option>58</option>
                        <option>59</option>
                      </select>
                    </div>
                  </div>
                  <div class="control">
                    <div class="select">
                      <select id="log_am_pm" name="log_am_pm">
                        <option>AM/PM</option>
                        <option>AM</option>
                        <option>PM</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="control">
                <div class="select">
                  <select id="visit_type" name="visit_type">
                    <option>Type of Contact</option>
                    <option>Scheduled Visit</option>
                    <option>Out of Home Visit</option>
                    <option>Caregiver Visit</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <label for="referrals" class="textmedium"> Referrals Made:</label>

          <div class="columns m-t-sm">
            <div class="column">
              <label for="basic_care" class="checkbox">
                <input id="basic_care" name="basic_care"type="checkbox">
                Basic Care
              </label>
            </div>
            <div class="column">
              <label for="childcare"class="checkbox">
                <input id="childcare" name="childcare"type="checkbox">
                Childcare
              </label>
            </div>
            <div class="column">
              <label for="dv"class="checkbox">
                <input id="dv" name="dv"type="checkbox">
                DV
              </label>
            </div>
            <div class="column">
              <label for="education"class="checkbox">
                <input id="education" name="education"type="checkbox">
                Education
              </label>
            </div>
            <div class="column">
              <label for="employment" class="checkbox">
                <input id="employment" name="employment"type="checkbox">
                Employment
              </label>
            </div>
            <div class="column">
              <label for="first_steps" class="checkbox">
                <input id="first_steps" name="first_steps"type="checkbox">
                First Steps
              </label>
            </div>
            <div class="column">
              <label for="health_department" class="checkbox">
                <input id="health_department" name="health_department"type="checkbox">
                Health Department
              </label>
            </div>
          </div>
          <div class="columns">
            <div class="column">
              <label for="mental_health" class="checkbox">
                <input id="mental_health" name="mental_health"type="checkbox">
                Mental Health
              </label>
            </div>
            <div class="column">
              <label for="na" class="checkbox">
                <input id="na" name="na"type="checkbox">
                N/A
              </label>
            </div>
            <div class="column">
              <label for="oral_hygiene"class="checkbox">
                <input id="oral_hygiene" name="oral_hygiene"type="checkbox">
                Oral Hygiene
              </label>
            </div>
            <div class="column">
              <label for="physican" class="checkbox">
                <input id="physican" name="physician"type="checkbox">
                Physican
              </label>
            </div>
            <div class="column">
              <label for="smoking" class="checkbox">
                <input id="smoking" name="smoking"type="checkbox">
                Smoking
              </label>
            </div>
            <div class="column">
              <label for="substance_abuse" class="checkbox">
                <input id="substance_abuse" name="substance_abuse"type="checkbox">
                Substance Abuse
              </label>
            </div>
            <div class="column">
              <label for="transportation" class="checkbox">
                <input id="transportation" name="transportation"type="checkbox">
                Transportation
              </label>
            </div>
          </div>
          <div class="columns">
            <div class="column is-1">
              <label for="other" class="checkbox">
                <input id="other_referral" name="other_referral"type="checkbox">
                Other
              </label>
            </div>
            <div class="column">
              <input id="other_referral" name="other_referral"class="input" type="text" placeholder="Text input">
            </div>
          </div>

          <label for="present" class="textmedium m-b-md"> Who Was Present?</label>

          <div class="columns">
            <div class="column">
              <label for="mother" class="checkbox">
                <input id="mother" name="mother"type="checkbox">
                Mother/Primary Caregiver
              </label>
            </div>
            <div class="column">
              <label for="father"class="checkbox">
                <input id="father" name="father"type="checkbox">
                Father/Partner
              </label>
            </div>
            <div class="column">
              <label for="temporary_custodian" class="checkbox">
                <input id="temporary_custodian" name="temporary_custodian"type="checkbox">
                Temporary Custodian
              </label>
            </div>
            <div class="column">
              <label for="baby"class="checkbox">
                <input id="baby" name="baby"type="checkbox">
                Baby
              </label>
            </div>
            <div class="column">
              <label for="grandparent" class="checkbox">
                <input id="grandparent" name="grandparent"type="checkbox">
                Grandparent
              </label>
            </div>
            <div class="column">
              <label for="interpreter" class="checkbox">
                <input id="interpreter" name="interpreter"type="checkbox">
                Interpreter
              </label>
            </div>
          </div>
          <div class="columns">
              <div class="column is-1">
                <label for="friend" class="checkbox">
                  <input id="friend" name="friend"type="checkbox">
                  Friend
                </label>
              </div>
              <div class="column is-1">
                <label for="sibling" class="checkbox">
                  <input id="sibling" name="sibling"type="checkbox">
                  Sibling
                </label>
              </div>
              <div class="column is-1">
                <label for="other_person" class="checkbox">
                  <input id="other_person" name="other_person" type="checkbox">
                  Other
                </label>
              </div>
              <div class="column ">
                  <input id="other_person" name="other_person" class="input" type="text" placeholder="Text input">
              </div>
          </div>


          <div class="columns">
            <label for="concerns" class="column is-three-quarters textmedium"> Do you have any concerns regarding your child's development, behavior, or learning?</label>
            <div class="column">
              <div class="control">
                <label for="concerns" class="radio">
                  <input id="concerns" name="concerns" type="radio" value="1" name="concerns">
                  Yes
                </label>
                <label for="concerns" class="radio">
                  <input id="concerns" name="concerns" type="radio" value="0" name="concerns">
                  No
                </label>
              </div>
            </div>
          </div>

          <label for="home_status" class="textmedium m-b-md"> Status of the Home</label>

          <div class="columns">
            <div class="column is-2">
              <label for="clean" class="checkbox">
                <input id="clean" name="clean"type="checkbox">
                Clean/Tidy
              </label>
            </div>
            <div class="column is-2">
              <label for="pets" class="checkbox">
                <input id="pets" name="pets" type="checkbox">
                Pets in the Home
              </label>
            </div>
            <div class="column is-2">
              <label for="smoking" class="checkbox">
                <input id="smoking" name="smoking" type="checkbox">
                Smoking in the Home
              </label>
            </div>
            <div class="column is-3">
              <label for="safe" class="checkbox">
                <input id="safe" name="safe" type="checkbox">
                Safe Area for Baby to Explore
              </label>
            </div>
            <div class="column">
              <label for="toys" class="checkbox">
                <input id="toys" name="toys" type="checkbox">
                Age Appropriate Toys Available
              </label>
            </div>
          </div>
        <div class="columns">
            <div class="column is-1">
              <label for="home_other" class="checkbox">
                <input id="home_other" name="home_other"type="checkbox">
                Other
              </label>
            </div>
            <div class="column ">
                <input id="home_other" name="home_other" class="input" type="text" placeholder="Text input">
            </div>
        </div>

        <label for="person_status" class="textmedium m-b-md"> Status of the Persons Present</label>

        <div class="columns">
          <div class="column">
            <label for="engages" class="checkbox">
              <input id="engages" name="engages"type="checkbox">
              Engages in Visit
            </label>
          </div>
          <div class="column">
            <label for="difficult" class="checkbox">
              <input id="difficult" name="difficult" type="checkbox">
              Difficult to Engage
            </label>
          </div>
          <div class="column">
            <label for="attentive" class="checkbox">
              <input id="attentive" name="attentive" type="checkbox">
              Attentive to Baby
            </label>
          </div>
          <div class="column">
            <label for="redirection" class="checkbox">
              <input id="redirection" name="redirection" type="checkbox">
              Needs Redirection
            </label>
          </div>
        </div>
        <div class="columns">
          <div class="column is-2">
            <label for="person_additional" class="checkbox">
              <input id="person_additional" name="person_additional"type="checkbox">
              Additional Information
            </label>
          </div>
          <div class="column ">
              <input id="person_additional" name="person_additional" class="input" type="text" placeholder="Text input">
          </div>
        </div>

        <label for="curriculum" class="textmedium m-b-md"> Curriculum Used</label>

          <div class="columns">
            <div class="column is-1">
              <label for="ggf" class="checkbox">
                <input id="ggf" name="ggf" type="checkbox">
                GGF
              </label>
            </div>
            <div class="column is-1">
              <label for="ggk" class="checkbox">
                <input id="ggk" name="ggk" type="checkbox">
                GGK
              </label>
            </div>
            <div class="column">
              <div class="control">
                <div class="select">
                  <label for="curriculum_age">
                  <select id="curriculum_age" name="curriculum_age">
                    <option>Prenatal</option>
                    <option>0-3 Months</option>
                    <option>4-6 Months</option>
                    <option>7-9 Months</option>
                    <option>10-12 Months</option>
                    <option>13-15 Months</option>
                    <option>16-18 Months</option>
                    <option>19-21 Months</option>
                    <option>22-24 Months</option>
                    <option>25-36 Months</option>
                  </select>
                </label>
                </div>
              </div>
            </div>
          </div>

          <div class="columns">
            <label for="module" class="column is-1"> Module:</label>
            <div class="column">
                <input id="module" name="module" class="input" type="text" placeholder="Text input">
            </div>
          </div>
          <div class="columns">
            <label for="activity" class="column is-1"> Activity:</label>
            <div class="column">
                <input id="activity" name="activity" class="input" type="text" placeholder="Text input">
            </div>
          </div>
          <div class="columns">
            <label for="subsection" class="column is-1"> Subsection:</label>
            <div class="column">
                <input id="subsection" name="subsection" class="input" type="text" placeholder="Text input">
            </div>
          </div>
          <div class="columns">
            <label for="handout" class="column is-1"> Handout:</label>
            <div class="column">
                <input id="handout" name="handout" class="input" type="text" placeholder="Text input">
            </div>
          </div>
          <div class="columns">
            <label for="demo" class="column is-1"> Demo:</label>
            <div class="column">
                <input id="demo" name="demo" class="input" type="text" placeholder="Text input">
            </div>
          </div>
          <label for="additional" class="textmedium m-b-md"> List any additional subsections, activities or handouts utilized during the visit:</label>
          <div class="column">
              <input id="additional" name="additional" class="input" type="text" placeholder="Text input">
          </div>
          <label for="materials" class="textmedium m-b-md"> List any other materials utilized during the visit:</label>
          <div class="column">
              <input id="materials" name="materials" class="input" type="text" placeholder="Text input">
          </div>
          <label for="forms" class="textmedium m-b-md"> Forms Completed:</label>
          <div class="columns">
              <div class="column">
                <label for="asq" class="checkbox">
                  <input id="asq" name="asq"type="checkbox">
                  ASQ-3
                </label>
              </div>
              <div class="column">
                <label for="asq_se"class="checkbox">
                  <input id="asq_se" name="asq_se"type="checkbox">
                  ASQ-SE2
                </label>
              </div>
              <div class="column">
                <label for="child_status"class="checkbox">
                  <input id="child_status" name="child_status" type="checkbox">
                  Child Status
                </label>
              </div>
              <div class="column">
                <label for="home_inventory"class="checkbox">
                  <input id="home_inventory" name="home_inventory" type="checkbox">
                  Home Infant/Toddler Inventory
                </label>
              </div>
          </div>
          <div class="columns">
              <div class="column">
                <label for="childproofing"class="checkbox">
                  <input id="childproofing" name="childproofing" type="checkbox">
                  Childproofing Checklist
                </label>
              </div>
              <div class="column">
                <label for="consent"class="checkbox">
                  <input id="consent" name="consent" type="checkbox">
                  Consent/Release
                </label>
              </div>
              <div class="column">
                <label for="eds" class="checkbox">
                  <input id="eds" name="eds" type="checkbox">
                  EDS
                </label>
              </div>
              <div class="column">
                <label for="goal"class="checkbox">
                  <input id="goal" name="goal" type="checkbox">
                  Goal Sheet
                </label>
              </div>
          </div>
          <div class="columns">
              <div class="column">
                <label for="caregiver_status" class="checkbox">
                  <input id="caregiver_status" name="caregiver_status" type="checkbox">
                  Primary Caregiver Status
                </label>
              </div>
              <div class="column">
                <label for="health_progress" class="checkbox">
                  <input id="health_progress" name="health_progress" type="checkbox">
                  Health Progress
                </label>
              </div>
              <div class="column">
                <label for="hippa" class="checkbox">
                  <input id="hippa" name="hippa" type="checkbox">
                  HIPPA
                </label>
              </div>
              <div class="column">
                <label for="dv_screen" class="checkbox">
                  <input id="dv_screen" name="dv_screen" type="checkbox">
                  DV Screen
                </label>
              </div>
          </div>
          <div class="columns">
                <div class="column">
                  <label for="mandatory" class="checkbox">
                    <input id="mandatory" name="mandatory" type="checkbox">
                    Mandatory Reporting/Referral
                  </label>
                </div>
                <div class="column">
                  <label for="partnership" class="checkbox">
                    <input id="partnership" name="partnership" type="checkbox">
                    Parent-Home Visitor Partnership Agreement/Toy Safety
                  </label>
                </div>
                <div class="column">
                  <label for="contact_information" class="checkbox">
                    <input id="contact_information" name="contact_information" type="checkbox">
                    Contact Information
                  </label>
                </div>
                <div class="column">
                  <label for="service_record" class="checkbox">
                    <input id="service_record" name="service_record" type="checkbox">
                    Service Record
                  </label>
                </div>
            </div>
          <!-- </div> -->

          <div class="textmedium m-b-md">
            Parent/Child Interaction (describe behaviors and activities observed between the parent and child):
          </div>
          <div class="columns">
            <div class="column centertext textmedium">
              Cues
            </div>
            <div class="column centertext textmedium">
              Expressions
            </div>
            <div class="column centertext textmedium">
              Empathy
            </div>
          </div>
          <div class="columns">
            <div class="column">
              <div class="field-body m-b-xl m-t-sm">
                <div class="field">
                  <div class="control">
                    <textarea id="cue" name="cue" class="textarea" placeholder="Describe the cue here."></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="field-body m-b-xl m-t-sm">
                <div class="field">
                  <div class="control">
                    <textarea id="expression" name="expression" class="textarea" placeholder="Describe the expression here."></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="field-body m-b-xl m-t-sm">
                <div class="field">
                  <div class="control">
                    <textarea id="empathy" name="empathy" class="textarea" placeholder="Describe the empathy here."></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <label for="interaction" class="textmedium m-b-md"> Parent/Child Interaction (describe behaviors and activities observed between the parent and child):</label>

          <div class="field-body m-b-xl m-t-sm">
            <div class="field">
              <div class="control">
                <textarea id="interaction" name="interaction" class="textarea" placeholder="Describe the contact here."></textarea>
              </div>
            </div>
          </div>

          <label for="interaction" class="textmedium m-b-sm"> Action Tools:</label>
          <div class="columns">
            <div class="column">
              <label for="atp" class="checkbox">
                <input id="atp" name="atp" type="checkbox">
                Accentuate the Positive
              </label>
            </div>
            <div class="column">
              <label for="explore_and_wonder" class="checkbox">
                <input id="explore_and_wonder" name="explore_and_wonder" type="checkbox">
                Explore & Wonder
              </label>
            </div>
            <div class="column">
              <label for="problem_talk" class="checkbox">
                <input id="problem_talk" name="problem_talk" type="checkbox">
                Problem Talk
              </label>
            </div>
          </div>
          <div class="columns">
            <div class="column">
              <label for="normalizing" class="checkbox">
                <input id="normalizing" name="normalizing" type="checkbox">
                Normalizing
              </label>
            </div>
            <div class="column">
              <label for="be_present" class="checkbox">
                <input id="be_present" name="be_present" type="checkbox">
                Be Present and Connect
              </label>
            </div>
            <div class="column">
              <label for="satp" class="checkbox">
                <input id="satp" name="satp" type="checkbox">
                Strategic Accentuate the Positive
              </label>
            </div>
          </div>
          <div class="field-body m-b-sm m-t-sm">
            <div class="field">
              <div class="control">
                <textarea id="interaction_example" name="interaction_example" class="textarea" placeholder="Give example."></textarea>
              </div>
            </div>
          </div>

          <label for="daily_dos" class="textmedium m-b-sm"> Daily Do's:</label>

          <div class="columns">
            <div class="column">
              <label for="e-parenting" class="checkbox">
                <input id="e-parenting" name="e-parenting" type="checkbox">
                E-Parenting
              </label>
            </div>
            <div class="column">
              <label for="character_builders" class="checkbox">
                <input id="character_builders" name="character_builders" type="checkbox">
                Character Builders
              </label>
            </div>
            <div class="column">
              <label for="brain_builders" class="checkbox">
                <input id="brain_builders" name="brain_builders" type="checkbox">
                Brain Builders
              </label>
            </div>
          </div>
          <div class="columns">
            <div class="column">
              <label for="4_steps" class="checkbox">
                <input id="4_steps" name="4_steps" type="checkbox">
                The 4 Steps to Success
              </label>
            </div>
            <div class="column">
              <label for="play_by_play" class="checkbox">
                <input id="play_by_play" name="play_by_play" type="checkbox">
                Play by Play
              </label>
            </div>
            <div class="column">
              <label for="body_builders" class="checkbox">
                <input id="body_builders" name="body_builders" type="checkbox">
                Body Builders
              </label>
            </div>
          </div>
          <div class="field-body m-b-sm m-t-sm">
            <div class="field">
              <div class="control">
                <textarea id="daily_dos_example" name="daily_dos_example" class="textarea" placeholder="Give example."></textarea>
              </div>
            </div>
          </div>

          <label for="goal_progress" class="textmedium m-b-sm">   Progress made my family towards goals:</label>

          <div class="columns">
            <div class="column">
              <label for="to_be_established" class="checkbox">
                <input id="to_be_established" name="to_be_established" type="checkbox">
                To be Established
              </label>
            </div>
            <div class="column">
              <label for="set_at_visit" class="checkbox">
                <input id="set_at_visit" name="set_at_visit" type="checkbox">
                Set at Visit
              </label>
            </div>
          </div>
          <div class="columns">
            <div class="column">
              <label for="progression" class="checkbox">
                <input id="progression" name="progression" type="checkbox">
                Progression
              </label>
            </div>
            <div class="column">
              <label for="partner_involved" class="checkbox">
                <input id="partner_involved" name="partner_involved" type="checkbox">
                Partner involved
              </label>
            </div>
            <div class="column">
              <label for="barriers" class="checkbox">
                <input id="barriers" name="barriers" type="checkbox">
                Barriers
              </label>
            </div>
          </div>
          <div class="field-body m-b-sm m-t-sm">
            <div class="field">
              <div class="control">
                <textarea id="goal_progress" name="goal_progress" class="textarea" placeholder="Give example."></textarea>
              </div>
            </div>
          </div>

          <label for="narrative" class="textmedium m-b-sm">   Narrative: Describe how person(s) present responded to materials, activities and modules, etc.</label>

          <div class="field-body m-b-sm m-t-sm">
            <div class="field">
              <div class="control">
                <textarea id="narrative" name="narrative" class="textarea" placeholder="Describe the contact here."></textarea>
              </div>
            </div>
          </div>
          <label for="referrals_last_visit" class="textmedium m-b-sm">   Referrals accepted at last visit were acted upon by family:</label>

          <div class="columns m-t-sm m-l-md">
            <div class-="column ">
              <div class="control">
                <label for="referrals_last_visit" class="radio">
                  <input value="1" type="radio" id="referral_yes"name="referrals_last_visit">
                  Yes
                </label>
                <label for="referrals_last_visit" class="radio">
                  <input value="0" type="radio" id="referral_no" name="referrals_last_visit">
                  No
                </label>
                <label  for="referrals_last_visit" class="radio">
                  <input value="2" type="radio" id="referral_none" name="referrals_last_visit">
                  None made at last visit
                </label>
              </div>
            </div>
          </div>
          <div class="field">
            <div class="control">
              <textarea id="referral_text" name="referral_text" class="textarea" placeholder="Describe the contact here."></textarea>
            </div>
          </div>

          <label for="follow_up" class="textmedium">   Follow-up plans:</label>

          <div class="column">
              <input id="follow_up" name="follow_up" class="input" type="text" placeholder="Text input">
          </div>
          <label for="follow_up_module" class="textmedium">   Module:</label>

          <div class="column">
              <input id="follow_up_module" name="follow_up_module" class="input" type="text" placeholder="Text input">
          </div>
          <label for="follow_up_activity" class="textmedium">   Activity:</label>

          <div class="column">
              <input id="follow_up_activity" name="follow_up_activity" class="input" type="text" placeholder="Text input">
          </div>

          <label for="next_visit" class="textmedium"> Next visit: </label>
          <div class="column m-l-md">
            <div class="contact field is-horizontal">
                <div class="field-body">
                  <div class="field is-narrow">
                    <div class="select">
                      <select id="next_visit_month" name="next_visit_month" >
                        <option>Month</option>
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                      </select>
                    </div>
                  </div>
                  <div class="field is-narrow">
                    <div class="select">
                      <select id="next_visit_day" name="next_visit_day">
                        <option>Day</option>
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                        <option>05</option>
                        <option>06</option>
                        <option>07</option>
                        <option>08</option>
                        <option>09</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
                        <option>31</option>
                      </select>
                    </div>
                  </div>
                  <div class="field">
                    <div class="select">
                      <select id="next_visit_year" name="next_visit_year">
                        <option>Year</option>
                        <option>2018</option>
                        <option>2019</option>
                        <option>2020</option>
                      </select>
                    </div>
                  </div>
              </div>
            </div>
          </div>

        <div class="columns">
          <div class="column is-2">
            <p>FSW's Signature</p>
          </div>
          <div class="column is-4">
              <input id="fsw_signature" name="fsw_signature" class="input" type="text" placeholder="Text input">
          </div>
          <div class="column is-1">
            <p>Date</p>
          </div>
          <div class="column is-2">
              <input id="fsw_date" name="fsw_date" class="input" type="text" placeholder="Text input">
          </div>
        </div>
        <div class="columns">
          <div class="column is-2">
            <p>Reviewer's Signature</p>
          </div>
          <div class="column is-4">
              <input id="supervisor_signature" name="supervisor_signature"class="input" type="text" placeholder="Text input">
          </div>
          <div class="column is-1">
            <p>Date</p>
          </div>
          <div class="column is-2">
              <input id="supervisor_date" name="supervisor_date" class="input" type="text" placeholder="Text input">
          </div>
        </div>

        <div class="control centertext m-b-xxl">
          <button class="button is-info">Submit Log</button>
        </div>
    </div>
</div>
</form>

@endsection
