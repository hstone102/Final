@extends('supervisorLayout')

@section('content')

<h2>Enter New Baby Information</h2>

<form class="" method="post" action="/client">
  @csrf
<div id="baby">
  <div class="columns m-t-md">
    <div class="column">
      <div class="control">
        <input id="firstName" name="firstName" class="input" type="text" placeholder="First Name">
      </div>
    </div>
    <div class="column">
      <div class="control">
        <input id="lastName" name="lastName" class="input" type="text" placeholder="Last Name">
      </div>
    </div>
    <div class="column">
      <div class="control">
        <input id="ssn" name="ssn" class="input" type="text" placeholder="SSN">
      </div>
    </div>
    <div class="column">
      <div class="control">
        <input id="medicaid" name="medicaid" class="input" type="text" placeholder="Medicaid Number">
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
                <select id="birth_month" name="birth_month">
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
                <select id="birth_day" name="birth_day">
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
                <select id="birth_year" name="birth_year">
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
                <select id="due_month" name="due_month">
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
                <select id="due_day" name="due_day">
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
                <select id="due_year" name="due_year">
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
          <select id="ethnicity" name="ethnicity">
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
          <select id="medical_home" name="medical_home">
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
          <select id="marital_status" name="marital_status">
            <option>Parent Marital Status</option>
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
          <select id="number_of_persons" name = "number_of_persons">
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
          <select id="income" name="income">
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
          <select id="insurance" name="insurance">
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
          <select id="primary_care" name="primary_care">
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
          <select id="prenatal_vitamin" name="prenatal_vitamin">
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
          <select id="nutritional_counseling" name="nutritional_counseling">
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
          <select id="smoking_in_home" name="smoking_in_home">
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
          <select id="employment_status" name="employment_status">
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
          <select id="education_enrollment" name="education_enrollment">
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
          <select id="educational_level" name="educational_level">
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
            <input id="parent_first_name" name="parent_first_name" class="input" type="text" placeholder="Parent First Name">
          </div>
        </div>
        <div class="column">
          <div class="control">
            <input id="parent_last_name" name="parent_last_name" class="input" type="text" placeholder="Parent Last Name">
          </div>
        </div>
        <div class="column">
          <div class="control">
            <input id="parent_ssn" name="parent_ssn" class="input" type="text" placeholder=" Parent SSN">
          </div>
        </div>
        <div class="column">
          <div class="control">
            <input id="parent_medicaid" name="parent_medicaid" class="input" type="text" placeholder=" Parent Medicaid Number">
          </div>
        </div>
      </div>
      <div class="columns  m-t-md">
        <div class="column">
          <div class="control">
            <input id="partner_first_name" name="partner_first_name" class="input" type="text" placeholder="Partner First Name">
          </div>
        </div>
        <div class="column">
          <div class="control">
            <input id="partner_last_name" name="partner_last_name" class="input" type="text" placeholder="Partner Last Name">
          </div>
        </div>
        <div class="column">
          <div class="control">
            <input id="partner_ssn" name="partner_ssn" class="input" type="text" placeholder=" Partner SSN">
          </div>
        </div>
        <div class="column">
          <div class="control">
            <input id="partner_medicaid" name="partner_medicaid" class="input" type="text" placeholder=" Partner Medicaid Number">
          </div>
        </div>
      </div>
  <div class="columns ">
    <div class="column m-b-xl">
      <div class="control">
        <div class="select">
          <select id="partner_employment" name="partner_employment">
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
          <select id="partner_education" name="partner_education">
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
          <select id="partner_education_status" name="partner_education_status">
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

<div class="control centertext m-b-xxl">
  <button class="button is-info">Submit</button>
</div>
</form>

@endsection
