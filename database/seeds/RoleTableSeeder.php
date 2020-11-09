<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(["name"=>"super_admin"]);
        Role::create(["name"=>"customer"]);
       
    }
}
