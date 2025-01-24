<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('locations')->insert([
      'name' => 'Location 1',
      'image' => 'https://picsum.photos/150?random=1',
    ], [
      'name' => 'Location 2',
      'image' => 'https://picsum.photos/150?random=1',
    ], [
      'name' => 'Location 3',
      'image' => 'https://picsum.photos/150?random=1',
    ]);
  }
}
