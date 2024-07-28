<?php

namespace Database\Seeders;

use App\Models\User;
use  Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory()->create([
          
              'name' => 'Admin BP3IP',
              'email' => 'adminbp3ip@admin.com',
              'password' => bcrypt('12345'),
              'remember_token' => Str::random(60),
          ]);
      }
    }

