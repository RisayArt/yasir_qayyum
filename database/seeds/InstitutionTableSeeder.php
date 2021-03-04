<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class InstitutionTableSeeder extends Seeder
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
            DB::table('institutions')->insert([
                'name' => $faker->name,
                'phone_number' => $faker->phoneNumber,
                'address' => $faker->address
        ]);
        }

    }
}
