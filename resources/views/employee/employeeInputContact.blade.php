@extends('employeeLayout')

@section('content')

<!-- print out the client name at the top. -->

<div class="centertext m-b-md textlarge">

Would you like to write a log or contact?

</div>

<div class="control centertext m-b-lg m-t-md">
  <div class="select">
    <select>
      <option>Pick One</option>
      <option>Log</option>
      <option>Contact</option>
    </select>
  </div>
</div>




<!-- Write out an if statement that either displays the contact form or a log form  -->

<div class="columns" id="contact">
  <div class="column m-l-xxl">
    Who was contacted
  </div>
  <div class="column m-l-md">
    Time of Contact
  </div>
</div>

<div class="columns">
  <div class="column m-l-xxl">
    <div class="field">
      <div class="select">
        <select>
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
              <select>
                <option>Hour</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
              </select>
            </div>
          </div>
          <div class="field is-narrow">
            <div class="select">
              <select>
                <option>Minute</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
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
              <select>
                <option>AM/PM</option>
                <option>AM</option>
                <option>PM</option>
              </select>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>




<div class="columns">
  <div class="column m-l-xxl">
    Type of Contact
  </div>
  <div class="column m-l-md">
    Date of Contact
  </div>
</div>
<div class="columns">
  <div class="column m-l-xxl">
    <div class="control">
      <div class="select">
        <select>
          <option>Type of Contact</option>
          <option>No Show</option>
          <option>Reschedule</option>
          <option>Cancel</option>
          <option>Group Event</option>
          <option>Reminder</option>
        </select>
      </div>
    </div>
  </div>
  <div class="column m-l-md">
    <div class="contact field is-horizontal">
        <div class="field-body">
          <div class="field is-narrow">
            <div class="select">
              <select>
                <option>Month</option>
                <option>January</option>
                <option>February</option>
                <option>March</option>
                <option>April</option>
                <option>May</option>
                <option>June</option>
                <option>July</option>
                <option>August</option>
                <option>September</option>
                <option>October</option>
                <option>November</option>
                <option>December</option>
              </select>
            </div>
          </div>
          <div class="field is-narrow">
            <div class="select">
              <select>
                <option>Day</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
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
              <select>
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
    <label class="label m-t-xl">Describe Contact</label>
  </div>
  <div class="field-body m-b-xl m-t-xl">
    <div class="field">
      <div class="control">
        <textarea class="textarea" placeholder="Describe the contact here."></textarea>
      </div>
    </div>
  </div>
</div>

<div class="control centertext m-b-xl">
  <button class="button is-info">Submit Contact</button>
</div>




<div id="log">

<div class="textmedium">
  <div class="columns" id="contact">
    <div class="column m-l-md">
      Date
    </div>
    <div class="column m-l-md">
      Time
    </div>
    <div class="column m-l-md">
      Visit Type
    </div>
  </div>
</div>


  <div class="columns">
    <div class="column m-l-md m-b-lg">
      <div class="field-body">
        <div class="field is-narrow">
          <div class="select">
            <select>
              <option>Month</option>
              <option>January</option>
              <option>February</option>
              <option>March</option>
              <option>April</option>
              <option>May</option>
              <option>June</option>
              <option>July</option>
              <option>August</option>
              <option>September</option>
              <option>October</option>
              <option>November</option>
              <option>December</option>
            </select>
          </div>
        </div>
        <div class="field is-narrow">
          <div class="select">
            <select>
              <option>Day</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
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
            <select>
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
                <select>
                  <option>Hour</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10</option>
                  <option>11</option>
                  <option>12</option>
                </select>
              </div>
            </div>
            <div class="field is-narrow">
              <div class="select">
                <select>
                  <option>Minute</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
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
                <select>
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
            <select>
              <option>Type of Contact</option>
              <option>Scheduled Visit</option>
              <option>Out of Home Visit</option>
              <option>Caregiver Visit</option>
            </select>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="textmedium">
  Referrals Made:
</div>

<div class="columns m-t-sm">
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Basic Care
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Childcare
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      DV
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Education
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Employment
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      First Steps
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Health Department
    </label>
  </div>
</div>
<div class="columns">
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Mental Health
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      N/A
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Oral Hygiene
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Physican
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Smoking
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Substance Abuse
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Transportation
    </label>
  </div>
</div>
<div class="columns">
  <div class="column is-1">
    <label class="checkbox">
      <input type="checkbox">
      Other
    </label>
  </div>
  <div class="column">
    <input class="input" type="text" placeholder="Text input">
  </div>
</div>

<div class="textmedium m-b-md">
  Who Was Present?
</div>

<div class="columns">
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Mother/Primary Caregiver
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Father/Partner
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Temporary Custodian
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Baby
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Grandparents
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Interpreter
    </label>
  </div>

  </div>
</div>
<div class="columns">
  <div class="column is-1">
    <label class="checkbox">
      <input type="checkbox">
      Friend
    </label>
  </div>
  <div class="column is-1">
    <label class="checkbox">
      <input type="checkbox">
      Sibling
    </label>
  </div>
  <div class="column is-1">
    <label class="checkbox">
      <input type="checkbox">
      Other
    </label>
  </div>
  <div class="column ">
      <input class="input" type="text" placeholder="Text input">
  </div>
  </div>
</div>

<div class="columns">
  <div class="column is-three-quarters textmedium">
    Do you have any concerns regarding your child's development, behavior, or learning?
  </div>
  <div class="column">
    <div class="control">
      <label class="radio">
        <input type="radio" name="answer">
        Yes
      </label>
      <label class="radio">
        <input type="radio" name="answer">
        No
      </label>
    </div>
  </div>
</div>

<div class="textmedium m-b-md">
  Status of the Home
</div>

<div class="columns">
  <div class="column is-2">
    <label class="checkbox">
      <input type="checkbox">
      Clean/Tidy
    </label>
  </div>
  <div class="column is-2">
    <label class="checkbox">
      <input type="checkbox">
      Pets in the Home
    </label>
  </div>
  <div class="column is-2">
    <label class="checkbox">
      <input type="checkbox">
      Smoking in the Home
    </label>
  </div>
  <div class="column is-3">
    <label class="checkbox">
      <input type="checkbox">
      Safe Area for Baby to Explore
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Age Appropriate Toys Available
    </label>
  </div>
</div>
<div class="columns">
    <div class="column is-1">
      <label class="checkbox">
        <input type="checkbox">
        Other
      </label>
    </div>
    <div class="column ">
        <input class="input" type="text" placeholder="Text input">
    </div>
</div>

<div class="textmedium m-b-md">
  Status of the Persons Present
</div>

<div class="columns">
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Engages in Visit
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Difficult to Engage
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Attentive to Baby
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Needs Redirection
    </label>
  </div>
</div>
<div class="columns">
  <div class="column is-2">
    <label class="checkbox">
      <input type="checkbox">
      Additional Information
    </label>
  </div>
  <div class="column ">
      <input class="input" type="text" placeholder="Text input">
  </div>
</div>

<div class="textmedium m-b-md">
  Curriculum Used
</div>

<div class="columns">
  <div class="column is-1">
    <label class="checkbox">
      <input type="checkbox">
      GGF
    </label>
  </div>
  <div class="column is-1">
    <label class="checkbox">
      <input type="checkbox">
      GGK
    </label>
  </div>
  <div class="column">
    <div class="control">
      <div class="select">
        <select>
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
      </div>
    </div>
  </div>
</div>

<div class="columns">
  <div class="column is-1">
    Module:
  </div>
  <div class="column">
      <input class="input" type="text" placeholder="Text input">
  </div>
</div>
<div class="columns">
  <div class="column is-1">
    Activity:
  </div>
  <div class="column">
      <input class="input" type="text" placeholder="Text input">
  </div>
</div>
<div class="columns">
  <div class="column is-1">
    Subsection:
  </div>
  <div class="column">
      <input class="input" type="text" placeholder="Text input">
  </div>
</div>
<div class="columns">
  <div class="column is-1">
    Handout:
  </div>
  <div class="column">
      <input class="input" type="text" placeholder="Text input">
  </div>
</div>
<div class="columns">
  <div class="column is-1">
    Demo:
  </div>
  <div class="column">
      <input class="input" type="text" placeholder="Text input">
  </div>
</div>

<div class="textmedium m-b-md">
  List any additional subsections, activities or handouts utilized during the visit:
</div>
<div class="column">
    <input class="input" type="text" placeholder="Text input">
</div>
<div class="textmedium m-b-md">
  List any other materials utilized during the visit:
</div>
<div class="column">
    <input class="input" type="text" placeholder="Text input">
</div>
<div class="textmedium m-b-md">
  Forms Completed:
</div>
<div class="columns">
  <div class="column is-1">
    <label class="checkbox">
      <input type="checkbox">
      N/A
    </label>
  </div>
  <div class="column is-1">
    <label class="checkbox">
      <input type="checkbox">
      ASQ-3
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      ASQ-SE2
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Child Status
    </label>
  </div>
  <div class="column is-3">
    <label class="checkbox">
      <input type="checkbox">
      Home Infant/Toddler Inventory
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Childproofing Checklist
    </label>
  </div>
</div>
<div class="columns">
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Consent/Release
    </label>
  </div>
  <div class="column is-1">
    <label class="checkbox">
      <input type="checkbox">
      EDS
    </label>
  </div>
  <div class="column is-2">
    <label class="checkbox">
      <input type="checkbox">
      Goal Sheet
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Primary Caregiver Status
    </label>
  </div>
  <div class="column is-2">
    <label class="checkbox">
      <input type="checkbox">
      Health Progress
    </label>
  </div>
  <div class="column is-1">
    <label class="checkbox">
      <input type="checkbox">
      HIPAA
    </label>
  </div>
</div>


<div class="columns">
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      DV Screen
    </label>
  </div>
  <div class="column is-3">
    <label class="checkbox">
      <input type="checkbox">
      Mandatory Reporting/Referral
    </label>
  </div>
  <div class="column is-5">
    <label class="checkbox">
      <input type="checkbox">
      Parent-Home Visitor Partnership Agreement/Toy Safety
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Contact Information
    </label>
  </div>
</div>
<div class="columns">
  <div class="column is-2">
    <label class="checkbox">
      <input type="checkbox">
      Service Record
    </label>
  </div>
  <div class="column is-1">
    <label class="checkbox">
      <input type="checkbox">
      Other
    </label>
  </div>
  <div class="column">
      <input class="input" type="text" placeholder="Text input">
  </div>
</div>

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
          <textarea class="textarea" placeholder="Describe the cue here."></textarea>
        </div>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="field-body m-b-xl m-t-sm">
      <div class="field">
        <div class="control">
          <textarea class="textarea" placeholder="Describe the expression here."></textarea>
        </div>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="field-body m-b-xl m-t-sm">
      <div class="field">
        <div class="control">
          <textarea class="textarea" placeholder="Describe the empathy here."></textarea>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="textmedium m-b-md">
  Parent/Child Interaction (describe behaviors and activities observed between the parent and child):
</div>

<div class="field-body m-b-xl m-t-sm">
  <div class="field">
    <div class="control">
      <textarea class="textarea" placeholder="Describe the contact here."></textarea>
    </div>
  </div>
</div>

<div class="textmedium m-b-sm">
  Action Tools:
</div>
<div class="columns">
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Accentuate the Positive
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Explore & Wonder
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Problem Talk
    </label>
  </div>
</div>
<div class="columns">
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Normalizing
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Be Present and Connect
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Strategic Accentuate the Positive
    </label>
  </div>
</div>
<div class="field-body m-b-sm m-t-sm">
  <div class="field">
    <div class="control">
      <textarea class="textarea" placeholder="Give example."></textarea>
    </div>
  </div>
</div>

<div class="textmedium m-b-sm">
  Daily Do's:
</div>
<div class="columns">
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      E-Parenting
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Character Builders
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Brain Builders
    </label>
  </div>
</div>
<div class="columns">
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      The 4 Steps to Success
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Play by Play
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Body BUilders
    </label>
  </div>
</div>
<div class="field-body m-b-sm m-t-sm">
  <div class="field">
    <div class="control">
      <textarea class="textarea" placeholder="Give example."></textarea>
    </div>
  </div>
</div>

<div class="textmedium m-b-sm">
  Progress made my family towards goals:
</div>
<div class="columns">
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      To be Established
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Set at Visit
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Problem Talk
    </label>
  </div>
</div>
<div class="columns">
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Progression
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Partner involved
    </label>
  </div>
  <div class="column">
    <label class="checkbox">
      <input type="checkbox">
      Barriers
    </label>
  </div>
</div>
<div class="field-body m-b-sm m-t-sm">
  <div class="field">
    <div class="control">
      <textarea class="textarea" placeholder="Give example."></textarea>
    </div>
  </div>
</div>

<div class="textmedium m-b-sm">
  Narrative: Describe how person(s) present responded to materials, activities and modules, etc.
</div>
<div class="field-body m-b-sm m-t-sm">
  <div class="field">
    <div class="control">
      <textarea class="textarea" placeholder="Describe the contact here."></textarea>
    </div>
  </div>
</div>

<div class="textmedium m-b-sm">
  Referrals accepted at last visit were acted upon by family:
</div>
<div class="columns m-t-sm m-l-md">
  <div class-="column ">
    <div class="control">
      <label class="radio">
        <input type="radio" name="answer">
        Yes
      </label>
      <label class="radio">
        <input type="radio" name="answer">
        No
      </label>
      <label class="radio">
        <input type="radio" name="answer">
        None made at last visit
      </label>
    </div>
  </div>
</div>
<div class="field">
  <div class="control">
    <textarea class="textarea" placeholder="Describe the contact here."></textarea>
  </div>
</div>

<div class=textmedium>
Follow-up plans:
</div>
<div class="column">
    <input class="input" type="text" placeholder="Text input">
</div>
<div class=textmedium>
Module:
</div>
<div class="column">
    <input class="input" type="text" placeholder="Text input">
</div>
<div class=textmedium>
Activity:
</div>
<div class="column">
    <input class="input" type="text" placeholder="Text input">
</div>
<div class=textmedium>
Next visit:
</div>
<div class="column m-l-md">
  <div class="contact field is-horizontal">
      <div class="field-body">
        <div class="field is-narrow">
          <div class="select">
            <select>
              <option>Month</option>
              <option>January</option>
              <option>February</option>
              <option>March</option>
              <option>April</option>
              <option>May</option>
              <option>June</option>
              <option>July</option>
              <option>August</option>
              <option>September</option>
              <option>October</option>
              <option>November</option>
              <option>December</option>
            </select>
          </div>
        </div>
        <div class="field is-narrow">
          <div class="select">
            <select>
              <option>Day</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
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
            <select>
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
      <input class="input" type="text" placeholder="Text input">
  </div>
  <div class="column is-1">
    <p>Date</p>
  </div>
  <div class="column is-2">
      <input class="input" type="text" placeholder="Text input">
  </div>
</div>
<div class="columns">
  <div class="column is-2">
    <p>Reviewer's Signature</p>
  </div>
  <div class="column is-4">
      <input class="input" type="text" placeholder="Text input">
  </div>
  <div class="column is-1">
    <p>Date</p>
  </div>
  <div class="column is-2">
      <input class="input" type="text" placeholder="Text input">
  </div>
</div>

@endsection
