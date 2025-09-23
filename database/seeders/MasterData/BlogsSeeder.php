<?php

namespace Database\Seeders\MasterData;

use Illuminate\Database\Seeder;

use App\Models\MasterData\Blogs;
use App\Models\User;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil beberapa user untuk assign ke news
        $users = User::all();

        if ($users->isEmpty()) {
            $this->command->info('Tidak ada user, seeder blogs dibatalkan.');
            return;
        }

        $num = 20;

        for ($i = 1; $i <= $num; $i++) {
            $user = $users->random();

            Blogs::create([
                'title' => "Blog Dummy #$i",
                'slug' => "blog-dummy-$i",
                'content' => "<p>Ini adalah konten blog dummy nomor $i. Lorem ipsum dolor sit amet.</p><img src='https://via.placeholder.com/400x200.png?text=Blog+$i' alt='Dummy Image'>",
                'image' => null, // Bisa pakai null atau path image lokal
                'user_id' => $user->id,
            ]);
        }

        $this->command->info('Seeder blogs selesai dijalankan.');
    }
}
