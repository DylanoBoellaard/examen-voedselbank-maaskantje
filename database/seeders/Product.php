<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['productnaam' => 'Brood', 'streepjescode' => '1000000001'],
            ['productnaam' => 'Melk', 'streepjescode' => '1000000002'],
            ['productnaam' => 'Kaas', 'streepjescode' => '1000000003'],
            ['productnaam' => 'Pindakaas', 'streepjescode' => '1000000004'],
            ['productnaam' => 'Soja', 'streepjescode' => '1000000005'],
            ['productnaam' => 'Garnalen', 'streepjescode' => '1000000006'],
            ['productnaam' => 'Zalm', 'streepjescode' => '1000000007'],
            ['productnaam' => 'Ei', 'streepjescode' => '1000000008'],
            ['productnaam' => 'Selderij', 'streepjescode' => '1000000009'],
            ['productnaam' => 'Mosterd', 'streepjescode' => '1000000010'],
        ];
        DB::table('product')->insert($products);
    }
}
