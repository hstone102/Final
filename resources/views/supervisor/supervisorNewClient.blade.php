@extends('supervisorLayout')

@section('content')

<h2 class="centertext textlarge">Are you entering information on a Primary Caregiver or Baby?</h2>
<div class="control m-t-sm centertext">
  <div class="select">
    <select>
      <option>Select dropdown</option>
      <option value="0">With options</option>
      <option value="1">Primary Caregiver</option>
      <option value="2">Baby</option>
    </select>
  </div>
</div>

<div id="caregiver">
  <div class="columns m-t-md">
    <div class="column">
      <div class="control">
        <input class="input" type="text" placeholder="First Name">
      </div>
    </div>
    <div class="column">
      <div class="control">
        <input class="input" type="text" placeholder="Last Name">
      </div>
    </div>
    <div class="column">
      <div class="control">
        <input class="input" type="text" placeholder="SSN">
      </div>
    </div>
    <div class="column">
      <div class="control">
        <input class="input" type="text" placeholder="Medicaid Number">
      </div>
    </div>
  </div>
  <div class="columns">
    <div class="column is-1">
      DOB:
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
    <div class="column centertext is-2">
      Due Date:
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
  <div class="columns">
    <div class="column">
      <div class="control">
        <div class="select">
          <select>
            <option>Ethnicity</option>
            <option>White</option>
            <option>Black</option>
            <option>Hispanic</option>
            <option>Multi</option>
            <option>African</option>
            <option>Iraqi</option>
            <option>Iranian</option>
            <option>Chinese</option>
            <option>Japanese</option>
          </select>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="control">
        <div class="select">
          <select>
            <option>Medical Home</option>
            <option>Yes</option>
            <option>No</option>
            <option>Unknown</option>
          </select>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="control">
        <div class="select">
          <select>
            <option>Marital Status</option>
            <option>Married</option>
            <option>Single</option>
            <option>Divorced</option>
            <option>Separated</option>
            <option>Widowed</option>
            <option>Living w/ Partner</option>
          </select>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="control">
        <div class="select">
          <select>
            <option># Persons in Household</option>
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
            <option>11+</option>
          </select>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="control">
        <div class="select">
          <select>
            <option>Annual Household Income</option>
            <option>0-5,000</option>
            <option>5001-10,000</option>
            <option>10,001-15,000</option>
            <option>15,001-20,000</option>
            <option>25,001-25,000</option>
            <option>25,001-30,000</option>
            <option>30,001-35,000</option>
            <option>35,001-40,000</option>
            <option>40,001-50,000</option>
            <option>50,001-70,000</option>
            <option>70,000+</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="columns">
    <div class="column">
      <div class="control">
        <div class="select">
          <select>
            <option>Insurance Coverage</option>
            <option>Medicaid</option>
            <option>Private</option>
            <option>Uninsured</option>
          </select>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="control">
        <div class="select">
          <select>
            <option>Primary Care Provider</option>
            <option>Private</option>
            <option>Health Department</option>
            <option>Clinic</option>
            <option>Other</option>
            <option>None</option>
          </select>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="control">
        <div class="select">
          <select>
            <option>Prenatal Vitamins</option>
            <option>Yes</option>
            <option>No</option>
            <option>Unknown</option>
          </select>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="control">
        <div class="select">
          <select>
            <option>Nutrition Counseling</option>
            <option>Yes</option>
            <option>No</option>
            <option>Unknown</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="columns">

    <div class="column">
      <div class="control">
        <div class="select">
          <select>
            <option>Smoking in Home</option>
            <option>Yes</option>
            <option>No</option>
            <option>Unknown</option>
          </select>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="control">
        <div class="select">
          <select>
            <option>Employment</option>
            <option>Employed full time</option>
            <option>Employed part time</option>
            <option>Unemployed- Not seeking work- Barriers</option>
            <option>Unemployed- Not seeking work- Education</option>
            <option>Unemployed- Not seeking work- Preference</option>
            <option>Unemployed- Not seeking work</option>
            <option>Other</option>
          </select>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="control">
        <div class="select">
          <select>
            <option>Education Enrollment Status</option>
            <option>Not Enrolled</option>
            <option>8th Grade or below</option>
            <option>High School</option>
            <option>GED</option>
            <option>2 Year Degree</option>
            <option>4 Year Degree</option>
            <option>Grad School</option>
            <option>Vocational</option>
            <option>Unknown</option>
          </select>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="control">
        <div class="select">
          <select>
            <option>Education Level</option>
            <option>8th Grade or below</option>
            <option>High School</option>
            <option>GED</option>
            <option>2 Year Degree</option>
            <option>4 Year Degree</option>
            <option>Grad School</option>
            <option>Vocational</option>
            <option>Unknown</option>
          </select>
        </div>
      </div>
    </div>
  </div>
      <div class="columns  m-t-md">
        <div class="column">
          <div class="control">
            <input class="input" type="text" placeholder="Partner First Name">
          </div>
        </div>
        <div class="column">
          <div class="control">
            <input class="input" type="text" placeholder="Partner Last Name">
          </div>
        </div>
        <div class="column">
          <div class="control">
            <input class="input" type="text" placeholder=" Partner SSN">
          </div>
        </div>
        <div class="column">
          <div class="control">
            <input class="input" type="text" placeholder=" Partner Medicaid Number">
          </div>
        </div>
      </div>
  <div class="columns ">
    <div class="column m-b-xl">
      <div class="control">
        <div class="select">
          <select>
            <option>Employment</option>
            <option>Employed full time</option>
            <option>Employed part time</option>
            <option>Unemployed- Not seeking work- Barriers</option>
            <option>Unemployed- Not seeking work- Education</option>
            <option>Unemployed- Not seeking work- Preference</option>
            <option>Unemployed- Not seeking work</option>
            <option>Other</option>
          </select>
        </div>
      </div>
    </div>
    <div class="column m-b-xl">
      <div class="control">
        <div class="select">
          <select>
            <option>Education Level</option>
            <option>8th Grade or below</option>
            <option>High School</option>
            <option>GED</option>
            <option>2 Year Degree</option>
            <option>4 Year Degree</option>
            <option>Grad School</option>
            <option>Vocational</option>
            <option>Unknown</option>
          </select>
        </div>
      </div>
    </div>
    <div class="column m-b-xl">
      <div class="control">
        <div class="select">
          <select>
            <option>Education Enrollment Status</option>
            <option>Not Enrolled</option>
            <option>8th Grade or below</option>
            <option>High School</option>
            <option>GED</option>
            <option>2 Year Degree</option>
            <option>4 Year Degree</option>
            <option>Grad School</option>
            <option>Vocational</option>
            <option>Unknown</option>
          </select>
        </div>
      </div>
    </div>
  </div>












</div>


<div id="baby">
</div>
@endsection
