<?php

namespace Database\Seeders;

use App\Models\Dock;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dock::insert([
            ['name' => 'Pearl Harbor', 'location' => 'Hawaii, USA'],
            ['name' => 'Yokosuka Naval Base', 'location' => 'Japan'],
            ['name' => 'Portsmouth', 'location' => 'UK'],
            ['name' => 'Kiel Naval Base', 'location' => 'Germany'],
            ['name' => 'London Dockyard', 'location' => 'UK'],
            ['name' => 'San Diego Naval Base', 'location' => 'California, USA'],
            ['name' => 'Naval Station Norfolk', 'location' => 'Virginia, USA'],
            ['name' => 'Naval Base San Francisco', 'location' => 'California, USA'],
            ['name' => 'Naval Base Kitsap', 'location' => 'Washington, USA'],
            ['name' => 'Naval Base Pearl Harbor', 'location' => 'Hawaii, USA'],
            ['name' => 'Naval Base San Diego', 'location' => 'California, USA'],
        ]);
    }
}
