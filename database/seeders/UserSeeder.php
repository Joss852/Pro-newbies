<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        $userAdmin = new User();
        $userAdmin->name = 'Admin';
        $userAdmin->lastname = 'Admin';
        $userAdmin->email = 'admin@root.com';
        $userAdmin->password = Hash::make('root1234');
        $userAdmin->rol = 1;
        $userAdmin->permissions = '';
        $userAdmin->save();

        $user = new User();
        $user->name = 'Edgar';
        $user->lastname = 'Olguin';
        $user->email = 'user@test.com';
        $user->password = Hash::make('test1234');
        $user->rol = 2;
        $user->save();
    }
}
