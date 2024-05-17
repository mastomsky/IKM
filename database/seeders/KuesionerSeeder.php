<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Kuesioner;
use App\Models\Responden;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KuesionerSeeder extends Seeder
{
    public function run(): void
    {
        // Kuesioner::factory()->count(7)->make();

        // $totalRespondens = 67;
        // $kuesioners = Kuesioner::all();
        // $respondens = Responden::factory()->count($totalRespondens)->make();
        
        // foreach ($respondens as $responden) {
        //     $responden->save();
        //     foreach ($kuesioners as $kuesioner) {
        //         $answer = Answer::factory()->make([
        //             'kuesioner_id' => $kuesioner->id,
        //             'responden_id' => $responden->id
        //         ]);
        //         $answer->save();
        //     }
        // }
        $kuesinoers = [
            'Kepuasan Persyaratan Pelayanan Dengan Jenis Pelayananya',
            'Muara Bone',
            'Masiaga',
            'Taludaa',
            'Permata',
            'Inogaluma',
            'Molamahu',
            'Sogitia',
            'Cendana Putih',
            'Monano',
            'Tumbuh Mekar',
            'Waluhu',
            'Ilohuuwa',
            'Bilolantunga',
        ];

        foreach ($kuesinoers as $kuesioner) {
            Kuesioner::create([
                'kuesioner' => $kuesioner
            ]);
        }
    }
}
