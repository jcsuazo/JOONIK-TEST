<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('locations')->insert([[
            'name' => 'Location 1',
            'image' => 'https://picsum.photos/150?random=1',
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'name' => 'Location 2',
            'image' => 'https://picsum.photos/150?random=1',
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'name' => 'Location 3',
            'image' => 'https://picsum.photos/150?random=1',
            'created_at' => now(),
            'updated_at' => now(),
        ]]);
    }
}
