<?php

namespace Database\Seeders\MasterData;

use Illuminate\Database\Seeder;

use App\Models\MasterData\Publication;

class PublicationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $num = 20;

        for ($i = 1; $i <= $num; $i++) {
            Publication::create([
                'title' => "Publikasi Dummy #$i",
                'cover' => 'publication/covers/glorious_morning_default.jpg', // Bisa pakai null atau path image lokal
                'file_path' => 'publication/files/glorious_morning_default.pdf'
            ]);
        }

        $this->command->info('Seeder publications selesai dijalankan.');

    }
}
