<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Siswa;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswaData = [
            [   
                'nis' => '123456789',
                'nama' => 'John Doe',
                'jenis_kelamin' => 'Pria',
                'tmpt_lahir' => 'Jakarta',
                'tgl_lahir' => '2000-01-15',
                'alamat' => 'jln.cukangkawung',
                'no_tlp' => '082119487121',
            ],
            [
                'nis' => '123466789',
                'nama' => 'Panjul',
                'jenis_kelamin' => 'Pria',
                'tmpt_lahir' => 'Jakarta',
                'tgl_lahir' => '2008-01-15',
                'alamat' => 'jln.luwing',
                'no_tlp' => '082119487121',
            ],
            // Tambahkan data siswa lainnya di sini
        ];

        foreach ($siswaData as $Sdata) {
            Siswa::create($Sdata);
        }
    }
}
