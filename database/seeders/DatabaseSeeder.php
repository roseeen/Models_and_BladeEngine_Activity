<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Factories\BookFactory;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->count(20)->create();
        BookFactory::new()->count(20)->create();
    }
}
