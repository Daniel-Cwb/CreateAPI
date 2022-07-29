<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRecord extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        (new User)->insert([
            [
                'name' => 'Daniel Fialho Ferreira',
                'email' => 'daniel.fialho90@gmail.com',
                'password' => Hash::make('senha1')
            ],
            [
                'name' => 'Leticia Maiara Queiroz',
                'email' => 'leticia@gmail.com',
                'password' => Hash::make('senha2')
            ]
        ]);
    }
}
