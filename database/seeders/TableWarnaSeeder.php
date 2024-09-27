<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TableWarna;

class TableWarnaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TableWarna::Create([
            'type' => json_encode([
                'type' => '20/2 AC BROWN',
                'distance' => 289,
                'total' => 17,
                'out' => [
                    'type' => '20/2 AC GREEN',
                    'total' => 1
                ]
            ]),
            'fabric_id' => 1,
            'comb' => '#44.1'
        ]);

        TableWarna::Create([
            'type' => json_encode([
                'type' => '50/6 RED',
                'distance' => 640,
                'total' => 11,
                'out' => [
                    'type' => '50/6 RED',
                    'total' => 1
                ]
            ]),
            'fabric_id' => 2,
            'comb' => '#44.1'
        ]);

        TableWarna::Create([
            'type' => json_encode([
                'type' => '16.4/2 ROYAL BLUE',
                'distance' => 575,
                'total' => 10
            ]),
            'fabric_id' => 3,
            'comb' => '#44.1'
        ]);

        TableWarna::Create([
            'type' => json_encode([
                'type' => '60/6 GREEN',
                'distance' => 363,
                'total' => 15,
                'out' => [
                    'type' => '60/6 GREEN',
                    'total' => 1
                ]
            ]),
            'fabric_id' => 4,
            'comb' => '#44.1'
        ]);

        TableWarna::Create([
            'type' => json_encode([
                'type' => '20/2 RED',
                'distance' => 231,
                'total' => 23
            ]),
            'fabric_id' => 5,
            'comb' => '#44'
        ]);
    }
}
