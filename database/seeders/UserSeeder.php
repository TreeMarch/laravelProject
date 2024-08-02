<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => '$2y$12$JFAF0MEOPBQz6l3Weqz47e0zaHNTMVdcshVHLFuSnitPJSgsrTGfG'

            ]

        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
