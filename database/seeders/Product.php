<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['naam' => 'Brood', 'streepjescode' => '1000000001'],
            ['naam' => 'Melk', 'streepjescode' => '1000000002'],
            ['naam' => 'Kaas', 'streepjescode' => '1000000003'],
            ['naam' => 'Pindakaas', 'streepjescode' => '1000000004'],
            ['naam' => 'Soja', 'streepjescode' => '1000000005'],
            ['naam' => 'Garnalen', 'streepjescode' => '1000000006'],
            ['naam' => 'Zalm', 'streepjescode' => '1000000007'],
            ['naam' => 'Ei', 'streepjescode' => '1000000008'],
            ['naam' => 'Selderij', 'streepjescode' => '1000000009'],
            ['naam' => 'Mosterd', 'streepjescode' => '1000000010'],
        ];
    }
}
