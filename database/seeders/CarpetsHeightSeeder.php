<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarpetsHeightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected $heights_values = [
        1 => 'Безворсовый(0-0.2 см)',
        2 => 'Средний(0,5-2 см)',
        3 => 'Высокий(2-5 см)'
    ];
    public function run(): void
    {
        DB::table('carpets_heights')->insert([
            // безворсовый
            ['carpets_type_id'=>1,'height_value'=>$this->heights_values[1]],
            // ковролин
            ['carpets_type_id'=>2,'height_value'=>$this->heights_values[1]],
            // Синтетика
            ['carpets_type_id'=>3,'height_value'=>$this->heights_values[1]],
            ['carpets_type_id'=>3,'height_value'=>$this->heights_values[2]],
            // Вискоза
            ['carpets_type_id'=>4,'height_value'=>$this->heights_values[1]],
            // Акрил
            ['carpets_type_id'=>5,'height_value'=>$this->heights_values[1]],
            // Бамбук
            ['carpets_type_id'=>6,'height_value'=>$this->heights_values[1]],
            // Шелк
            ['carpets_type_id'=>7,'height_value'=>$this->heights_values[1]],
            // Шерсть
            ['carpets_type_id'=>8,'height_value'=>$this->heights_values[1]],
            // Шегги
            ['carpets_type_id'=>9,'height_value'=>$this->heights_values[1]],
            ['carpets_type_id'=>9,'height_value'=>$this->heights_values[2]],
            ['carpets_type_id'=>9,'height_value'=>$this->heights_values[3]],
        ]);
    }
}
