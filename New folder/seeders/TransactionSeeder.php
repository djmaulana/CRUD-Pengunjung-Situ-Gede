<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($num = 1; $num <= 60; $num += 2)
        {
            DB::table('transaction')->insert(array(
                array(
                    'kode' => $faker->unique()->bothify('?-####'),
                    'invoice'=> 'Invoice-'.$faker->randomNumber(4, true),
                    'date' => $faker->dateTimeThisYear('+'.$faker->randomNumber(2, true).' months'),
                    'total' => $faker->randomNumber(5, true),
                )
            ));
        }
    }
}
