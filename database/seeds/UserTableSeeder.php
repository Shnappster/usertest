<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $role_admin  = Role::where('name', 'admin')->first();

        $admin = new User();
        $admin->login = 'root';
        $admin->password = bcrypt('secret');
        $admin->save();
        $admin->role()->attach($role_admin);
  }
}