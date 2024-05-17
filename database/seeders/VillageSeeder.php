<?php

namespace Database\Seeders;

use App\Models\Village;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class VillageSeeder extends Seeder
{
    public function run(): void
    {
        $villages = [
            'Balongpanggang',
            'Benjeng',
            'Bungah',
            'Cerme',
            'Driyorejo',
            'Duduk Sampeyan',
            'Dukun',
            'Gresik',
            'Kebomas',
            'Kedamean',
            'Manyar',
            'Menganti',
            'Panceng',
            'Sangkapura',
            'Sidayu',
            'Tambak',
            'Ujung Pangkah',
            'Wringinanom',
        ];

        foreach ($villages as $village) {
            Village::create([
                'village' => $village
            ]);
        }
    }
}
