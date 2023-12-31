<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name'         => 'asdf',
                'surname'      => 'asdf',
                'birth_date'   => '1980/10/25',
                'email'        => 'asdf@asdf.asdf',
                'password'     => Hash::make('password'),
            ],
            [
                'name'         => 'qwer',
                'birth_date'   => '2023/01/26',
                'email'        => 'qwer@qwer.qwer',
                'password'     => Hash::make('password'),
            ],
            [
                'name'         => 'zxcv',
                'surname'      => 'zxcv',
                'email'        => 'zxcv@zxcv.zxcv',
                'password'     => Hash::make('password'),
            ],
        ];

        foreach ($users as $user_data) {
            User::create($user_data);
        }
    }
}