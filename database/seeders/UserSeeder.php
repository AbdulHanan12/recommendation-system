<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Create([
            "name" => 'Admin',
            "email" => 'admin@yts.com',
            'password' => Hash::make('1234abcd&'),
            'is_admin' => 1,
        ]);
    }
}
