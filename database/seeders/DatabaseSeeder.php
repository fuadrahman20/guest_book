<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Ensure you are using the correct namespace

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Uncomment the line below if you want to use the User model factory
        // \App\Models\User::factory(10)->create();

        // Example seeding with specific data
        User::create([
            'nama' => 'Test User',
            'jumlah_tamu' => 5,
            'tanggal_mulai' => now(),
            'tanggal_selesai' => now()->addDays(7),
            'domisili' => 'Dalam Kota',
            'tujuan' => 'Kunjungan Industri',
            'staff' => 'staff1',
            'keterangan' => 'Lorem Ipsum',
        ]);
    }
}
