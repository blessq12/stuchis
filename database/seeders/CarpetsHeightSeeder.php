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
        0 => 'Безворс.(менее 2 мм)',
        1 => 'Низкий(2-5 мм)',
        2 => 'Средний(5-20 мм)',
        3 => 'Высокий(20-50 мм)'
    ];
    public function run(): void
    {
        DB::table('heights')->insert([
            // безворсовый
            ['type_id'=>1,'value'=>$this->heights_values[1],'image' => 1],
            // ковролин
            ['type_id'=>2,'value'=>$this->heights_values[1], 'image' => 1],
            // Синтетика
            ['type_id'=>3,'value'=>$this->heights_values[1], 'image' => 1],
            ['type_id'=>3,'value'=>$this->heights_values[2], 'image' => 2],
            // Вискоза
            ['type_id'=>4,'value'=>$this->heights_values[1], 'image' => 1],
            // Акрил
            ['type_id'=>5,'value'=>$this->heights_values[1], 'image' => 1],
            // Бамбук
            ['type_id'=>6,'value'=>$this->heights_values[1], 'image' => 1],
            // Шелк
            ['type_id'=>7,'value'=>$this->heights_values[1], 'image' => 1],
            // Шерсть
            ['type_id'=>8,'value'=>$this->heights_values[1], 'image' => 1],
            // Шегги
            ['type_id'=>9,'value'=>$this->heights_values[1], 'image' => 1],
            ['type_id'=>9,'value'=>$this->heights_values[2], 'image' => 2],
            ['type_id'=>9,'value'=>$this->heights_values[3], 'image' => 3],
        ]);
    }
}
