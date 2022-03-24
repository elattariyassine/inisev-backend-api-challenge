<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Website;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Website::factory()
            ->has(Post::factory()->count(5))
            ->has(User::factory()->count(10), 'subscribers')
            ->count(3)
            ->create();
    }
}
