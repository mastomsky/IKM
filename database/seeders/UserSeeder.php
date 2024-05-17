<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
    
            User::factory()->create([
            'name' => 'Super IKM',
            'email' => 'toomsgege@gmail.com',
            'role_id' => '1',
            'password' => Hash::make('admin123'),
            'avatar' => 'https://www.gravatar.com/avatar/'.hash('sha256', strtolower(trim('admin@ikm.test'))),

            'name' => 'Admin IKM',
            'email' => 'admin@gmail.com',
            'role_id' => '2',
            'password' => Hash::make('admin123'),
            'avatar' => 'https://www.gravatar.com/avatar/'.hash('sha256', strtolower(trim('admin@ikm.test')))
            ]);
        }
}
