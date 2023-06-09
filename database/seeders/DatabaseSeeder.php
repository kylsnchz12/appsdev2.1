<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(ActorSeeder::class);
        $this->call(DirectorSeeder::class);
        $this->call(GenresSeeder::class);
        $this->call(MovieSeeder::class);
        $this->call(ReviewerSeeder::class);

        $this->call(MovieCastSeeder::class);
        $this->call(MovieDirectionSeeder::class);
        $this->call(MovieGenresSeeder::class);
        $this->call(RatingSeeder::class);

    }
}
