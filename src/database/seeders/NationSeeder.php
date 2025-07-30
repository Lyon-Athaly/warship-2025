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
            ['name' => 'Germany', 'flag_url' => 'https://flagcdn.com/de.svg'],
            ['name' => 'France', 'flag_url' => 'https://flagcdn.com/fr.svg'],
            ['name' => 'Italy', 'flag_url' => 'https://flagcdn.com/it.svg'],
            ['name' => 'Russia', 'flag_url' => 'https://flagcdn.com/ru.svg'],
            ['name' => 'China', 'flag_url' => 'https://flagcdn.com/cn.svg'],
            ['name' => 'India', 'flag_url' => 'https://flagcdn.com/in.svg'],
        ]);
    }
}
