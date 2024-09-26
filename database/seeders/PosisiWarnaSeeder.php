<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PosisiWarna;

class PosisiWarnaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PosisiWarna::Create([
            'fabric_id' => 3,
            'colour_id' => 3,
            'cones' => 684,
            'seksi' => 8,
            'sisir' => '#44.1',
            'wb_no'=> '0646 A'
        ]);

        PosisiWarna::Create([
            'fabric_id' => 1,
            'colour_id' => 1,
            'cones' => 384,
            'seksi' => 14,
            'sisir' => '#44.1',
            'wb_no'=> '1118'
        ]);

        PosisiWarna::Create([
            'fabric_id' => 2,
            'colour_id' => 2,
            'cones' => 726,
            'seksi' => 10,
            'sisir' => '#44.1',
            'wb_no'=> '0827'
        ]);

        PosisiWarna::Create([
            'fabric_id' => 4,
            'colour_id' => 4,
            'cones' => 645,
            'seksi' => 9,
            'sisir' => '#44.1',
            'wb_no'=> '0001'
        ]);

    }
}
