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

        $admin2 = new App\User;

        $admin2->name= 'Admin Name';
        $admin2->email= 'd2d@gmail.com';
        $admin2->password = \Hash::make('password');
        $admin2->save();
        $admin2->roles()->attach($role_admin);
    }
}
