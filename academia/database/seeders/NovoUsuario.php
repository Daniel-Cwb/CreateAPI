<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class NovoUsuario extends Seeder
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
                'name' => 'Maria Socorro Fialho',
                'email' => 'mariasocorro@gmail.com',
                'password' => Hash::make('senha3')
            ],
            [
                'name' => 'Francisco alguma coisa',
                'email' => 'francisco@gmail.com',
                'password' => Hash::make('senha4') 
            ]
        ]);
    }
}
