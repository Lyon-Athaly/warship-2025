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
        ]);
    }
}
