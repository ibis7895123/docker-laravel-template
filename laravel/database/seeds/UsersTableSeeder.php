<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert(
            [
                [
                    'name' => 'test',
                    'email' => 'test@sample.com',
                    'password' => Hash::make('testtest'),
                ],
                [
                    'name' => Str::random(10),
                    'email' => Str::random(10) . '@sample.com',
                    'password' => Hash::make('testtest'),
                ],
            ]
        );
    }
}
