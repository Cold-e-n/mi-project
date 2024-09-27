<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kain;

class KainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kain::Create([
            'name' => 'RN4033V-233 Calendar',
            'colour_id' => 1
        ]);

        Kain::Create([
            'name' => 'M-R406J-229(MO)',
            'colour_id' => 2
        ]);

        Kain::Create([
            'name' => 'TB86-2300 (No WSP With Line)',
            'colour_id' => 3
        ]);

        Kain::Create([
            'name' => 'MX47G252(MO)',
            'colour_id' => 4
        ]);

        Kain::Create([
            'name' => '200R-2220(L)',
            'colour_id' => 5
        ]);

    }
}
