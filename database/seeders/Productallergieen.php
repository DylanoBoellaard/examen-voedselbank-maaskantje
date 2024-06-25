<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Productallergieen extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productallergie = [
            // create 15 rows and randomize the numbers
            ['product_id' => 1, 'allergie_id' => 1],
            ['product_id' => 2, 'allergie_id' => 2],
            ['product_id' => 3, 'allergie_id' => 2],
            ['product_id' => 4, 'allergie_id' => 4],
            ['product_id' => 4, 'allergie_id' => 3],
            ['product_id' => 5, 'allergie_id' => 5],
            ['product_id' => 6, 'allergie_id' => 7],
            ['product_id' => 7, 'allergie_id' => 7],
            ['product_id' => 8, 'allergie_id' => 8],
            ['product_id' => 7, 'allergie_id' => 14],
            ['product_id' => 8, 'allergie_id' => 14],
        ];
        DB::table('productallergie')->insert($productallergie);
    }
}
