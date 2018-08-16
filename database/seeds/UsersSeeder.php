<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'     => 'Joe',
            'email'    => 'joe.doe@example.com',
            'password' => Hash::make('password123'),
            'api_token' => Hash::make('joe.doe@example.com'),
        ]);
    }
}
