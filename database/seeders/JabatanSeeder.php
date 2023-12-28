<?php

namespace Database\Seeders;

use App\Models\Jabatans;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jabatans::create([
            'nama_jabatan' => 'HRD',
        ]);
    }
}
