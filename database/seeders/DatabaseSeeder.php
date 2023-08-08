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
        // $this->call(UserSecondSeeder::class);
        $this->call(UsersTableSeeders::class);

        // \App\Models\User::factory()->create([
        //     'nama' => 'Test User',
        //     'email' => 'hafizambiya5@gmail.com',
        //     'password' => 'ambiya',
        // ]);
    }
}
