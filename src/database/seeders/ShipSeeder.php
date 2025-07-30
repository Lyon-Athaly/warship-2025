<?php

namespace Database\Seeders;

use App\Models\Ship;
use App\Models\Type;
use App\Models\Dock;
use App\Models\Nation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ship::create([
            'name' => 'USS Enterprise',
            'type_id' => Type::where('name', 'Carrier')->first()->id,
            'dock_id' => Dock::where('name', 'Pearl Harbor')->first()->id,
            'nation_id' => Nation::where('name', 'United States')->first()->id,
            'built_year' => 1961,
        ]);

        Ship::create([
            'name' => 'HMS Queen Elizabeth',
            'type_id' => Type::where('name', 'Carrier')->first()->id,
            'dock_id' => Dock::where('name', 'Portsmouth')->first()->id,
            'nation_id' => Nation::where('name', 'United Kingdom')->first()->id,
            'built_year' => 2017,
        ]);

        Ship::create([
            'name' => 'JS Kongo',
            'type_id' => Type::where('name', 'Destroyer')->first()->id,
            'dock_id' => Dock::where('name', 'Yokosuka Naval Base')->first()->id,
            'nation_id' => Nation::where('name', 'Japan')->first()->id,
            'built_year' => 1993,
        ]);
    }
}
