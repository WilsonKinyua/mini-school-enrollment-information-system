<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'                 => 1,
                'name'               => 'School Admin',
                'email'              => 'admin@school.com',
                'password'           => bcrypt('password'),
                'remember_token'     => null,
                'verified'           => 1,
                'verified_at'        => '2021-04-23 21:33:58',
                'verification_token' => '',
            ],
            [
                'id'                 => 2,
                'name'               => 'John Bonto',
                'email'              => 'johnbonto@gmail.com',
                'password'           => bcrypt('password'),
                'remember_token'     => null,
                'verified'           => 1,
                'verified_at'        => '2021-04-23 21:33:58',
                'verification_token' => '',
            ],
        ];

        User::insert($users);
    }
}
