<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->insert([


            [

                'name' => '1',
                'username' => 'admin',
                'role_id' => '1',
                'email' => 'admin@demo.com',
                'password' => bcrypt('123456'),
                'status' => '1',
            ],

            [

                'name' => '2',
                'username' => 'amelia',
                'role_id' => '2',
                'email' => 'amelia@demo.com',
                'password' => bcrypt('123456'),
                'status' => '1',
            ],

            [

                'name' => '2',
                'username' => 'sarah',
                'role_id' => '3',
                'email' => 'sarah@demo.com',
                'password' => bcrypt('123456'),
                'status' => '1',
            ],

        ]);
    }
}
