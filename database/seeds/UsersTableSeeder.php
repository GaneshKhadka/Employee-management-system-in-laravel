<?php

use Illuminate\Database\Seeder;

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
            [
                'created_at' => \Carbon\Carbon::now(),
                'username' => 'ganesh',
                'image' => '',
                'first_name' => 'ganesh',
                'last_name' => 'khadka',
                'role' => 'admin',
                'email' => 'ganeshkhadka46@gmail.com',
                'password' => bcrypt('admin123'),
                'status' => '1',
                'phone' => '9866567794',
                'address' => 'butwal',
                'gender' => 'male',
                'dob' => '2019-03-12',
                'join_date' => '2019-03-12',
                'job_type' => 'sales',
                'city' => 'butwal',
                'age' => '23',
            ],
            [
                'created_at' => \Carbon\Carbon::now(),
                'username' => 'gunner',
                'image' => '',
                'first_name' => 'gunner',
                'last_name' => 'kc',
                'role' => 'employee',
                'email' => 'gunnerpat46@gmail.com',
                'password' => bcrypt('employee123'),
                'status' => '1',
                'phone' => '986133131',
                'address' => 'butwal',
                'gender' => 'male',
                'dob' => '2019-03-12',
                'join_date' => '2019-03-12',
                'job_type' => 'IT',
                'city' => 'butwal',
                'age' => '22',
            ],

            [
                'created_at' => \Carbon\Carbon::now(),
                'username' => 'nabin',
                'image' => '',
                'first_name' => 'nbn',
                'last_name' => 'bhandari',
                'role' => 'admin',
                'email' => 'nabin@gmail.com',
                'password' => bcrypt('admin123'),
                'status' => '1',
                'phone' => '9866454562',
                'address' => 'butwal',
                'gender' => 'male',
                'dob' => '2019-03-12',
                'join_date' => '2019-03-12',
                'job_type' => 'Developer',
                'city' => 'butwal',
                'age' => '21',
            ],

            [
                'created_at' => \Carbon\Carbon::now(),
                'username' => 'abcd',
                'image' => '',
                'first_name' => 'xyz',
                'last_name' => 'pqr',
                'role' => 'employee',
                'email' => 'employee1@gmail.com',
                'password' => bcrypt('employee123'),
                'status' => '1',
                'phone' => '9866567794',
                'address' => 'butwal',
                'gender' => 'male',
                'dob' => '2019-03-12',
                'join_date' => '2019-03-12',
                'job_type' => 'Developer',
                'city' => 'butwal',
                'age' => '25',
            ],

            [
                'created_at' => \Carbon\Carbon::now(),
                'username' => 'bishal',
                'image' => '',
                'first_name' => 'bishal',
                'last_name' => 'gc',
                'role' => 'employee',
                'email' => 'bishal@gmail.com',
                'password' => bcrypt('employee123'),
                'status' => '1',
                'phone' => '9866567794',
                'address' => 'butwal',
                'gender' => 'male',
                'dob' => '2019-03-12',
                'join_date' => '2019-03-12',
                'job_type' => 'designer',
                'city' => 'butwal',
                'age' => '25',
            ],
        ]);
    }
}
