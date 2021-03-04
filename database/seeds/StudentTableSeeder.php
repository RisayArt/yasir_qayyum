<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        foreach (range(1,20) as $index){
            DB::table('students')->insert([
                'name' => $faker->name,
                'father_name' => $faker->name,
                'contact_number' => $faker->phoneNumber
            ]);
        }
    }
}
