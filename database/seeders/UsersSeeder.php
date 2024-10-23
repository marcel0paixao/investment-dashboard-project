<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{User, Role};
use App\Constants;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate([
            'name' => 'Administrador',
            'email' => 'administrator@email.com',
            'password' => Hash::make('Admin123'),
            'role_id' => Role::where('name', Constants::ADMIN_ROLE)->first()->id
        ]);
    }
}
