<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\password;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $password = Hash::make('123456');

        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'diego@admin.com',
                'password' => $password,
                'role_id' => 1
            ]
        ]);
    }
}
