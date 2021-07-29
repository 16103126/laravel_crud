<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Shakib',
                'email' => 'shakib@gmail.com',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Rakib',
                'email' => 'rakib@gmail.com',
                'password' =>Hash::make('123456') ,
            ]
            ];

            DB::table('users')->insert($data);
    }
}
