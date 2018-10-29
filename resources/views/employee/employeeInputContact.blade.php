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

<div class="columns">
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




<div class="log">
</div>







@endsection
