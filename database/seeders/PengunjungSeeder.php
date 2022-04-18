<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PengunjungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($num = 1; $num <= 60; $num += 2)
        {
            DB::table('pengunjung')->insert(array(
                array(
                    'kode' => $faker->unique()->bothify('?-####'),
                    'nama'=> $faker->name(),
                    'kategori' =>  $faker->randomElement(['Dewasa', 'Anak-anak', 'Remaja']),
                    'kota' => $faker->city(),
                    'nohp' => $faker->phoneNumber(),
                    'masuk' => $faker->dateTimeThisYear('+'.$faker->randomNumber(1, true).' months')
                )
            ));
        }
    }
}
