<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

        DB::table('users')->insert([
            'role_id' => 1,
            'name' => 'Super Admin',
            'email' => 'sadmin@laravel-base.com',
            'password' => Hash::make('Sup3r@dm1n'),
            'password_exp' => 0,
            'active' => 1,
            'online' => 0,
            'created_user_id' => 0,
            'created_at' => Carbon::now(),
            'updated_user_id' => 0,
            'updated_at' => Carbon::now(),
        ]);
    }
}