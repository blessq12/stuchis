<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('companies')->insert([
            'name' => 'фэска',
            'name_additional' => 'фабрика стирки ковров',
            'address' => 'пос. Пятихатки, ул.Дачная, 7',
            'email_address' => 'stuchis@yandex.ru',
            'phone' => '+7(988)344-08-55',
            'wa_link' => 'https://api.whatsapp.com/send/?phone=79883440855',
            'tg_link' => 'http://t.me/Tsarevich22',
            'logo' => '/assets/images/logo.svg'
        ]);
    }
}
