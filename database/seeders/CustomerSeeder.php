<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=1 ; $i<=100 ; $i++){

            $customer = new Customer;
            $customer->name = $faker->name;
            $customer->email = $faker->email;
            $customer->gender="M";
            $customer->address =  $faker->address;
            $customer->state =  $faker->state;
            $customer->country = $faker->country;
            $customer->dob =  $faker->date;
            $customer->password = $faker->password;
            $customer->save();
        }
    }
}
