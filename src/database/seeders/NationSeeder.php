<?php

namespace Database\Seeders;

use App\Models\Nation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Nation::insert([
            ['name' => 'United States', 'flag_url' => 'https://flagcdn.com/us.svg'],
            ['name' => 'Japan', 'flag_url' => 'https://flagcdn.com/jp.svg'],
            ['name' => 'United Kingdom', 'flag_url' => 'https://flagcdn.com/gb.svg'],
        ]);
    }
}
