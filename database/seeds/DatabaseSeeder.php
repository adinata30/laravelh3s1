<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $user = new User();
        $user->name = "user";
        $user->email = "user@gmail.com";
        $user->role = "user";
        $user->password = Hash::make('useruser');
        $user->save();

        $user = new User();
        $user->name = "admin";
        $user->email = "admin@gmail.com";
        $user->role = "admin";
        $user->password = Hash::make('adminadmin');
        $user->save();
    }
}
