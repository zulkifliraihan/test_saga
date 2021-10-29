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
        // Author Seeder //
        $author1 = User::firstOrCreate([
            'name' => 'Author 1',
            'email' => 'author1@demo.com',
            'password' => Hash::make('123123'),
        ]);
        $author1->assignRole('author');

        $author2 = User::firstOrCreate([
            'name' => 'Author 2',
            'email' => 'author2@demo.com',
            'password' => Hash::make('123123'),
        ]);
        $author2->assignRole('author');

        // Admin Seeder
        $admin = User::firstOrCreate([
            'name' => 'Author 2',
            'email' => 'admin@demo.com',
            'password' => Hash::make('123123'),
        ]);
        $admin->assignRole('admin');


    }
}
