<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'user@user.com',
            'password' => Hash::make('test'),
            'ROLE_ADMIN' => '0',
            'ROLE_USER' => '1',
        ]);
    }
}
