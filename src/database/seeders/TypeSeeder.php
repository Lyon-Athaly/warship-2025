<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Type::insert([
            ['name' => 'Destroyer', 'description' => 'Fast, maneuverable long-endurance warship.'],
            ['name' => 'Cruiser', 'description' => 'Heavily armed warship.'],
            ['name' => 'Battleship', 'description' => 'Large armored warship with a main battery of large caliber guns.'],
            ['name' => 'Carrier', 'description' => 'Ship that serves as a seagoing airbase.'],
        ]);
    }
}
