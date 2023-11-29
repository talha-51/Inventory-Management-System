<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'username' => 'user1',
                'password' => 'user@123'
            ]
        );

        DB::table('users')->insert(
            [
                'username' => 'user2',
                'password' => 'user@231'
            ]
        );

        DB::table('users')->insert(
            [
                'username' => 'user3',
                'password' => 'user@321'
            ]
        );
    }
}
