<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Manager',
            'email' => 'manager@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $admin->assignRole('manager');

        $admin = User::create([
            'name' => 'Pegawai',
            'email' => 'Pegawai@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $admin->assignRole('pegawai');
    }
}
