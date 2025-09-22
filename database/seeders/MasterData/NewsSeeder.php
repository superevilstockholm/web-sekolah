<?php

namespace Database\Seeders\MasterData;

use Illuminate\Database\Seeder;

use App\Models\MasterData\News;
use App\Models\User;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil beberapa user untuk assign ke news
        $users = User::all();

        if ($users->isEmpty()) {
            $this->command->info('Tidak ada user, seeder news dibatalkan.');
            return;
        }

        $num = 20;

        for ($i = 1; $i <= $num; $i++) {
            $user = $users->random();

            News::create([
                'title' => "Berita Dummy #$i",
                'slug' => "berita-dummy-$i",
                'content' => "<p>Ini adalah konten berita dummy nomor $i. Lorem ipsum dolor sit amet.</p><img src='https://via.placeholder.com/400x200.png?text=Berita+$i' alt='Dummy Image'>",
                'image' => null, // Bisa pakai null atau path image lokal
                'user_id' => $user->id,
            ]);
        }

        $this->command->info('Seeder news selesai dijalankan.');
    }
}
