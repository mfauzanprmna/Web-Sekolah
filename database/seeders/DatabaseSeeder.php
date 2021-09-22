<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Siswa;
use App\Models\Kela;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Kelas::create([
            'XII',
            'RPL',
            'XII RPL 3',
            '2021/2022',
            'Dwi Setiawan',
            'Aktif'
        ]);

        Siswa::create([
            '004183910',
            'Kukuh Pradypta',
            '1',
        ]);
    }
}
