<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Penyakit::truncate();

        $penyakits = [
            [
                'kode_penyakit' => 'P01',
                'nama_penyakit' => 'Katarak',
            ],
            [
                'kode_penyakit' => 'P02',
                'nama_penyakit' => 'Glaukoma',
            ],
            [
                'kode_penyakit' => 'P03',
                'nama_penyakit' => 'Refraksi/Rabun',
            ],
            [
                'kode_penyakit' => 'P04',
                'nama_penyakit' => 'Strabismus/Mata Juling',
            ],

        ];

        foreach($penyakits as $penyakit){
            \App\Models\Penyakit::create($penyakit);
        }
    }
}
