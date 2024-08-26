<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "name" => "customer",
                "username" => "customer",
                "email" => "customer@example.com",
                "password" => Hash::make("11223344"),
                "role" => "customer"
            ],
            [
                "name" => "admin",
                "username" => "admin",
                "email" => "admin@example.com",
                "password" => Hash::make("11223344"),
                "role" => "admin"
            ],
        ];

        User::insert($data);
    }
}
