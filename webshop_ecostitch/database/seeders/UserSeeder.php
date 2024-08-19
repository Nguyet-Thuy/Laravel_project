<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Admin
        User::create([
            'name' => 'admin',
            'email' => 'admin@ehb.be',
            'bio' => 'Administrator met volledige toegang.',
            'phone' => '02/523 37 37',
            'address' => 'Nijverheidskaai 170, 1070 Anderlecht',
            'birthday' => '01-01-1986',
            'password' => Hash::make('Password!321'), 
            'usertype' => 'admin', 
        ]);

        // Users
        User::create([
            'name' => 'John Doe',
            'email' => 'john.doe@mail.com',
            'bio' => 'A passionate web developer from New York.',
            'phone' => '056/21 56 87',
            'address' => '123 Elm Street, New York, NY',
            'birthday' => '15-05-1985',
            'password' => Hash::make('password123'),
            'usertype' => 'user', 
        ]);

        User::create([
            'name' => 'Jantje Smith',
            'email' => 'jantje.smith@mail.com',
            'bio' => 'Graphic designer en artiest die houdt van kleine steden zoals Kortrijk.',
            'phone' => '056/74 56 96',
            'address' => 'Wandelingstraat 6, 8500 Kortrijk',
            'birthday' => '1990-10-25',
            'password' => Hash::make('securepassword'),
            'usertype' => 'user', 
        ]);

        User::create([
            'name' => 'An Cools',
            'email' => 'an.cools@mail.com',
            'bio' => 'Gepassioneerd door fruitbomen.',
            'phone' => '03/897 56 20',
            'address' => 'Lierstraat 15, 3000 Antwerpen',
            'birthday' => '25-05-1990',
            'password' => Hash::make('securepassword'),
            'usertype' => 'user', 
        ]);

        
     
    }
}
