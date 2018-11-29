<?php

use Faker\Generator as Faker;

$factory->define(App\Client::class, function (Faker $faker) {
    return [
        //
        // 'user_id' =>
            'firstName' => $faker->firstName,
            'lastName' => $faker->lastName,
            'ssn' => $faker->ssn,
            'medicaid' => $faker->ssn,
            'birth_month' => $faker->month,
            'birth_day' => $faker->dayOfMonth,
            'birth_year' => intval($faker->biasedNumberBetween($min = 2016, $max = 2018)),
            'due_month' => $faker->month,
            'due_day' => $faker->dayOfMonth,
            'due_year' => intval($faker->biasedNumberBetween($min = 2016, $max = 2018, $function = 'sqrt')),
            'ethnicity' => $faker->randomElement(['White', 'Black', 'Hispanic', 'Multi', 'African', 'Iraqi', 'Iranian', 'Chinese', 'Japanese']),
            'medical_home' => $faker->randomElement(['Yes', 'No', 'Unknown']),
            'marital_status' => $faker->randomElement(['Married', 'Single', 'Divorced', 'Separated', 'Widowed', 'Living w/ Partner']),
            'number_of_persons' => intval($faker->biasedNumberBetween($min = 1, $max = 11, $function = 'sqrt')),
            'income' => $faker->randomElement(['1-5,000', '5,001-10,000', '10,001-15,000', '15,001-20,000', '20,001-25,000', '25,001-30,000', '30,001-35,000', '35,001-40,000', '40,001-50,000', '50,001-70,000', '70,000+']),
            'insurance' => $faker->randomElement(['Medicaid', 'Private', 'Uninsured']),
            'primary_care' => $faker->randomElement(['Private', 'Health Department', 'Clinic', 'Other', 'None']),
            'prenatal_vitamin' => $faker->randomElement(['Yes', 'No', 'Unknown']),
            'nutritional_counseling' => $faker->randomElement(['Yes', 'No', 'Unknown']),
            'smoking_in_home' => $faker->randomElement(['Yes', 'No', 'Unknown']),
            'employment_status' => $faker->randomElement(['Employed full time', 'Employed part time', 'Unemployed- Not seeking work- Barriers', 'Unemployed- Not seeking work- Education', 'Unemployed- Not seeking work- Preference', 'Unemployed- Seeking work', 'Other']),
            'education_enrollment' => $faker->randomElement(['Not Enrolled', '8th Grade or below', 'High School', 'GED', '2 Year Degree', '4 Year Degree', 'Grad School', 'Vocational', 'Unknown']),
            'educational_level' => $faker->randomElement(['Not Enrolled', '8th Grade or below', 'High School', 'GED', '2 Year Degree', '4 Year Degree', 'Grad School', 'Vocational', 'Unknown']),
            'parent_first_name' => $faker->firstNameFemale,
            'parent_last_name' => $faker->lastName,
            'parent_ssn' => $faker->ssn,
            'parent_medicaid' => $faker->ssn,
            'partner_first_name' => $faker->firstNameMale,
            'partner_last_name' => $faker->lastName,
            'partner_ssn'=> $faker->ssn,
            'partner_medicaid' => $faker->ssn,
            'partner_employment' => $faker->randomElement(['Employed full time', 'Employed part time', 'Unemployed- Not seeking work- Barriers', 'Unemployed- Not seeking work- Education', 'Unemployed- Not seeking work- Preference', 'Unemployed- Seeking work', 'Other']),
            'partner_education' => $faker->randomElement(['Employed full time', 'Employed part time', 'Unemployed- Not seeking work- Barriers', 'Unemployed- Not seeking work- Education', 'Unemployed- Not seeking work- Preference', 'Unemployed- Seeking work', 'Other']),
            'partner_education_status' => $faker->randomElement(['Not Enrolled', '8th Grade or below', 'High School', 'GED', '2 Year Degree', '4 Year Degree', 'Grad School', 'Vocational', 'Unknown'])
    ];
});
