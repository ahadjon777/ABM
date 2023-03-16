<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void

     */

    public function run()
    {
        DB::table('profiles')->insert([
            'first_name'=>   'AKT va AHI Kursantlari',
            'ph_number'=>    6025,
            'state'=>       'Uzbekistan',
            'country'=>     'ASIA',
            'time_zone'=>    'Tashkent',
            'last_name'=>    'Kursant',
            'organization'=> 'Lorem ip som',
            'address'=>      'Yunusabad 10-mavze',
            'zip_code'=>     '777777',
            'language'=>     'uzbek',
            'currency'=>     '1.000.000$',
            'user_id'=>     1
        ]);
    }
}
