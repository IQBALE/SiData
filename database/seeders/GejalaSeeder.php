<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Gejala::truncate();
        
        $gejalas = [
            [
                'kode_gejala' => 'G01',
                'nama_gejala' => 'Pandangan kabur seperti berkabut',
                'cf' => 0.4,
            ],
            [
                'kode_gejala' => 'G02',
                'nama_gejala' => 'Pandangan ganda',
                'cf' => 0.4,
            ],
            [
                'kode_gejala' => 'G03',
                'nama_gejala' => 'Penurunan penglihatan pada malam hari',
                'cf' => 0.6,
            ],
            [
                'kode_gejala' => 'G04',
                'nama_gejala' => 'Rasa silau saat melihat lampu mobil, matahari, atau lampu',
                'cf' => 0.2,
            ],
            [
                'kode_gejala' => 'G05',
                'nama_gejala' => 'Sering mengganti ukuran kacamata',
                'cf' => 0.4,
            ],
            [
                'kode_gejala' => 'G06',
                'nama_gejala' => 'Warna di sekitar terlihat memudar',
                'cf' => 0.6,
            ],
            [
                'kode_gejala' => 'G07',
                'nama_gejala' => 'Melihat lingkaran di sekeliling cahaya',
                'cf' => 0.2,
            ],
            [
                'kode_gejala' => 'G08',
                'nama_gejala' => 'Nyeri pada mata',
                'cf' => 0.6,
            ],
            [
                'kode_gejala' => 'G09',
                'nama_gejala' => 'Sakit kepala',
                'cf' => 0.6,
            ],
            [
                'kode_gejala' => 'G10',
                'nama_gejala' => 'Mata memerah',
                'cf' => 0.2,
            ],
            [
                'kode_gejala' => 'G11',
                'nama_gejala' => 'Mual atau muntah',
                'cf' => 0.2,
            ],
            [
                'kode_gejala' => 'G12',
                'nama_gejala' => 'Mata berkabut (khususnya pada bayi)',
                'cf' => 0.2,
            ],
            [
                'kode_gejala' => 'G13',
                'nama_gejala' => 'Penglihatan yang makin menyempit hingga akhirnya tidak dapat melihat obyek sama sekali',
                'cf' => 0.6,
            ],
            [
                'kode_gejala' => 'G14',
                'nama_gejala' => 'Pandangan mata kabur atau berbayang',
                'cf' => 0.2,
            ],
            [
                'kode_gejala' => 'G15',
                'nama_gejala' => 'Sering menyipitkan mata untuk melihat objek dengan jelas',
                'cf' => 0.4,
            ],
            [
                'kode_gejala' => 'G16',
                'nama_gejala' => 'Sulit fokus saat membaca buku, menonton TV, dan melihat layar komputer atau gadget',
                'cf' => 0.6,
            ],[
                'kode_gejala' => 'G17',
                'nama_gejala' => 'Mata sensitif atau silau terhadap pencahayaan yang terlalu terang',
                'cf' => 0.4,
            ],
            [
                'kode_gejala' => 'G18',
                'nama_gejala' => 'Mata silau atau melihat lingkaran cahaya di sekitar cahaya terang',
                'cf' => 0.2,
            ],
            [
                'kode_gejala' => 'G19',
                'nama_gejala' => 'Mata tegang',
                'cf' => 0.4,
            ],
            [
                'kode_gejala' => 'G20',
                'nama_gejala' => 'Posisi kedua mata tidak sejajar',
                'cf' => 0.6,
            ],
            [
                'kode_gejala' => 'G21',
                'nama_gejala' => 'Kedua mata tidak melihat ke arah yang sama',
                'cf' => 0.6,
            ],
            [
                'kode_gejala' => 'G22',
                'nama_gejala' => 'Menutup salah satu mata saat berusaha fokus pada objek tertentu',
                'cf' => 0.4,
            ],
            [
                'kode_gejala' => 'G23',
                'nama_gejala' => 'Pergerakan mata yang tidak terkoordinasi (kedua mata tidak bergerak bersamaan)',
                'cf' => 0.4,
            ],
            [
                'kode_gejala' => 'G24',
                'nama_gejala' => 'Kehilangan penglihatan',
                'cf' => 0.2,
            ],
        ];

        foreach($gejalas as $gejala){
            \App\Models\Gejala::create($gejala);
        }
    }

    public function logout(Request $request){   
        $request->session()->flush();
        // Auth::logout();
        return redirect('/login');
    }

}
