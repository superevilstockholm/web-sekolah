<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

use Database\Seeders\MasterData\NewsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Hillary Aimee',
            'email' => 'hillary.aimee@gmail.com',
            'password' => Hash::make('hillary_aimee123'),
        ]);

        $this->call([
            NewsSeeder::class,
        ]);
    }
}
