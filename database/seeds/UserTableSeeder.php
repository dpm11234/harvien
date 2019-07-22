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
        $role_admin = App\Role::where('name', 'admin')->first();

        $admin = new App\User;
        $admin->name= 'Admin Name';
        $admin->email= 'deoyellow@gmail.com';
        $admin->password = \Hash::make('password');
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
