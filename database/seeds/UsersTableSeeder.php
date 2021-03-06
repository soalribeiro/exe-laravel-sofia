<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\User::create([
           'name' => 'Administrator',
           'email' => 'admin@tdi.pt',
           'password' => Hash::make('admin123'),
           'role_id' => 1,
        ]);

        \App\User::create([
            'name' => 'Manager',
            'email' => 'manager@tdi.pt',
            'password' => Hash::make('manager123'),
            'role_id' => 2,
        ]);

        \App\User::create([
            'name' => 'Editor',
            'email' => 'editor@tdi.pt',
            'password' => Hash::make('editor123'),
            'role_id' => 4,
        ]);

        \App\User::create([
            'name' => 'Repórter',
            'email' => 'reporter@tdi.pt',
            'password' => Hash::make('reporter123'),
            'role_id' => 5,
        ]);

        factory('App\User', 20)->create();
    }
}
