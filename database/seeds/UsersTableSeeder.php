<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => '$2y$10$IrkufJ6Dwga7cn/Sz4iDc.98EkEMmbbl3Z6665vTjTS/upbWL53bu',
            'remember_token' => null,
            'created_at'     => '2019-07-20 19:24:20',
            'updated_at'     => '2019-07-20 19:24:20',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
