<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$I8h7dTQmbU3.caqvTlgGIer/mbR3UNq7wF8b/b0XeajqwqgvG/Smu',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
