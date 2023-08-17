<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarpetsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types')->insert([
            ['name' => 'Безворсовый', 'image' => '/assets/images/carpets/bezvors.jpg'],
            ['name' => 'Ковролин', 'image' => '/assets/images/carpets/kovrolin.jpg'],
            ['name' => 'Синтетика', 'image' => '/assets/images/carpets/sintetika.jpg'],
            ['name' => 'Вискоза', 'image' => '/assets/images/carpets/viskoza.jpg'],
            ['name' => 'Акрил', 'image' => '/assets/images/carpets/akril.jpg'],
            ['name' => 'Бамбук', 'image' => '/assets/images/carpets/bambuk.jpg'],
            ['name' => 'Шелк', 'image' => '/assets/images/carpets/shelk.jpg'],
            ['name' => 'Шерсть', 'image' => '/assets/images/carpets/sherst.jpg'],
            ['name' => 'Шегги', 'image' => '/assets/images/carpets/shaggy.jpg'],
        ]);
    }
}
