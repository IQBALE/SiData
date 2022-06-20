<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\User::truncate();

        $hash = Hash::make('admin');
        $user = [
            [
                'username' => 'admin',
                'password' => $hash,
                'role' => 'admin',
            ],
        ];

        foreach($user as $users){
            \App\Models\User::create($users);
        }
    }
}
