<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        // Output: 54esmdr0qf
        $password = substr(str_shuffle($permitted_chars), 0, 6);
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@bookdonation.com',
            'password' => bcrypt('password')
        ]);
        $user->assignRole('super_admin');
    }
}