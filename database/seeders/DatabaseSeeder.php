<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Petugas;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Petugas::create([
            'nama_petugas' => 'Eko Kurniawan Khannedy',
            'username' => 'Kang Eko',
            'password' => Hash::make("password"),
            'telp' => '081234567',
            'level' => 'admin',
        ]);
    }
}
