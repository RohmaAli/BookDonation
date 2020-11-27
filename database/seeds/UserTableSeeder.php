<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Customer;
use App\Category;
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
        $customer = new Customer();
        $customer->name = $user->name;
        $customer->email = $user->email;
        $customer->save();
        $customer->user()->save($user);


        //temporary data
        $cat = new Category;
        $cat->title = "cat1";
        $cat->description = "xyz";
        $cat->save();

        $cat = new Category;
        $cat->title = "cat2";
        $cat->description = "abc";
        $cat->save();

        $cat = new Category;
        $cat->title = "cat3";
        $cat->description = "pqr";
        $cat->save();

        $cat = new Category;
        $cat->title = "cat4";
        $cat->description = "lmn";
        $cat->save();
    }
}
