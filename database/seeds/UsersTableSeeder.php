<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('users')->insert([
           'name' => 'Karen',
           'email' => 'karen@gmail.com',
           'password' => bcrypt('secret'),
           'supervisor' => '1',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
       ]);

       DB::table('users')->insert([
            'name' => 'Holly',
            'email' => 'holly@gmail.com',
            'password' => bcrypt('secret'),
            'supervisor' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
             'name' => 'Megan',
             'email' => 'megan@gmail.com',
             'password' => bcrypt('secret'),
             'supervisor' => '0',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now()
         ]);

         DB::table('users')->insert([
              'name' => 'Kali',
              'email' => 'kali@gmail.com',
              'password' => bcrypt('secret'),
              'supervisor' => '0',
              'created_at' => Carbon::now(),
              'updated_at' => Carbon::now()
          ]);
        //
    }
}
