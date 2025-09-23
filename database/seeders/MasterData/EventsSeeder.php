<?php

namespace Database\Seeders\MasterData;

use Illuminate\Database\Seeder;

use App\Models\MasterData\Events;
use App\Models\User;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil beberapa user untuk assign ke news
        $users = User::all();

        if ($users->isEmpty()) {
            $this->command->info('Tidak ada user, seeder events dibatalkan.');
            return;
        }

        $num = 20;

        for ($i = 1; $i <= $num; $i++) {
            $user = $users->random();

            Events::create([
                'title' => "Acara Dummy #$i",
                'slug' => "acara-dummy-$i",
                'content' => "<p>Ini adalah konten cerita dummy nomor $i. Lorem ipsum dolor sit amet.</p><img src='https://via.placeholder.com/400x200.png?text=Acara+$i' alt='Dummy Image'>",
                'image' => null, // Bisa pakai null atau path image lokal
                'user_id' => $user->id,
            ]);
        }

        $this->command->info('Seeder events selesai dijalankan.');
    }
}
