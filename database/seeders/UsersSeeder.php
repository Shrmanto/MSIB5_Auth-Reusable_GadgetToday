<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@gadgettoday.com';
        $user->password = Hash::make('admin');
        $user->role = 'admin';
        $user->save();

        $user = new User();
        $user->name = 'user';
        $user->email = 'user@gadgettoday.com';
        $user->password = Hash::make('user');
        $user->role = 'user';
        $user->save();
    }
}
