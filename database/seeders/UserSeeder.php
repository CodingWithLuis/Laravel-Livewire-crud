<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'User Test',
                'email' => 'user@user.com',
                'password' => Hash::make('12345678')
            ]
        ];


        foreach ($users as $user) {
            User::create($user);
        }
    }
}
