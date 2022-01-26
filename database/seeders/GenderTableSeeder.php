<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('genders')->insert(
            [
                'name'       => 'Laki-laki',

            ],
           
        );
        DB::table('genders')->insert(
            [
                'name'       => 'Perempuan',

            ],
           
        );
    }
}
