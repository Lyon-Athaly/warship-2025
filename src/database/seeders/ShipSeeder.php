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
            'hull_number' => 6,
            'built_year' => 1938,
        ]);

        Ship::create([
            'name' => 'HMS Hood',
            'type_id' => Type::where('name', 'Battleship')->first()->id,
            'dock_id' => Dock::where('name', 'Portsmouth')->first()->id,
            'nation_id' => Nation::where('name', 'United Kingdom')->first()->id,
            'hull_number' => 51,
            'built_year' => 1920,
        ]);

        Ship::create([
            'name' => 'IJN shimakaze',
            'type_id' => Type::where('name', 'Destroyer')->first()->id,
            'dock_id' => Dock::where('name', 'Yokosuka Naval Base')->first()->id,
            'nation_id' => Nation::where('name', 'Japan')->first()->id,
            'hull_number' => 125,
            'built_year' => 1943,
        ]);

        Ship::create([
            'name' => 'KMS Bismarck',
            'type_id' => Type::where('name', 'Battleship')->first()->id,
            'dock_id' => Dock::where('name', 'Kiel Naval Base')->first()->id,
            'nation_id' => Nation::where('name', 'Germany')->first()->id,
            'hull_number' => 509,
            'built_year' => 1940,
        ]);
        Ship::create([
            'name' => 'HMS Belfast',
            'type_id' => Type::where('name', 'Cruiser')->first()->id,
            'dock_id' => Dock::where('name', 'London Dockyard')->first()->id,
            'nation_id' => Nation::where('name', 'United Kingdom')->first()->id,
            'hull_number' => 35,
            'built_year' => 1939,
        ]);
        
        Ship::create([
            'name' => 'USS Missouri',
            'type_id' => Type::where('name', 'Battleship')->first()->id,
            'dock_id' => Dock::where('name', 'Pearl Harbor')->first()->id,
            'nation_id' => Nation::where('name', 'United States')->first()->id,
            'hull_number' => 63,
            'built_year' => 1944,
        ]);

        Ship::create([
            'name' => 'KMS Prinz Eugen',
            'type_id' => Type::where('name', 'Cruiser')->first()->id,
            'dock_id' => Dock::where('name', 'Kiel Naval Base')->first()->id,
            'nation_id' => Nation::where('name', 'Germany')->first()->id,
            'hull_number' => 507,
            'built_year' => 1940,
        ]);

        Ship::create([
            'name' => 'IJN I-401',
            'type_id' => Type::where('name', 'Submarine')->first()->id,
            'dock_id' => Dock::where('name', 'Yokosuka Naval Base')->first()->id,
            'nation_id' => Nation::where('name', 'Japan')->first()->id,
            'hull_number' => 401,
            'built_year' => 1944,
        ]);

        Ship::create([
            'name' => 'SS Kirov',
            'type_id' => Type::where('name', 'Cruiser')->first()->id,
            'dock_id' => Dock::where('name', 'Kronstadt Naval Base')->first()->id,
            'nation_id' => Nation::where('name', 'Russia')->first()->id,
            'hull_number' => 26,
            'built_year' => 1943,
        ]);
        
        Ship::create([
            'name' => 'USS New Jersey',
            'type_id' => Type::where('name', 'Battleship')->first()->id,
            'dock_id' => Dock::where('name', 'Naval Station Norfolk')->first()->id,
            'nation_id' => Nation::where('name', 'United States')->first()->id,
            'hull_number' => 62,
            'built_year' => 1943,
        ]);

        Ship::create([
            'name' => 'HMS Vanguard',
            'type_id' => Type::where('name', 'Battleship')->first()->id,
            'dock_id' => Dock::where('name', 'Portsmouth')->first()->id,
            'nation_id' => Nation::where('name', 'United Kingdom')->first()->id,
            'hull_number' => 23,
            'built_year' => 1946,
        ]);

        Ship::create([
            'name' => 'INS Vikrant',
            'type_id' => Type::where('name', 'Carrier')->first()->id,
            'dock_id' => Dock::where('name', 'Naval Base San Francisco')->first()->id,
            'nation_id' => Nation::where('name', 'India')->first()->id,
            'hull_number' => 1,
            'built_year' => 1961,
        ]);

        Ship::create([
            'name' => 'IJN Yamato',
            'type_id' => Type::where('name', 'Battleship')->first()->id,
            'dock_id' => Dock::where('name', 'Kure Naval Base')->first()->id,
            'nation_id' => Nation::where('name', 'Japan')->first()->id,
            'hull_number' => 111,
            'built_year' => 1941,
        ]);

        
    }
}
