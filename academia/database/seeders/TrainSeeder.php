<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Train;
use Illuminate\Support\Facades\Hash;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userFirst = User::where(['email' => 'daniel.fialho90@gmail.com'])->get()->first();

        Train::insert([

            [
                'name' => 'supino reto',
                'description' => 'descrição....',
                'weight' => 20,
                'times_series' => 4,
                'repetitions' => 8,
                'user_id' =>$userFirst->id
            ],

            [
                'name' => 'supino inclinado',
                'description' => 'descrição....',
                'weight' => 10,
                'times_series' => 4,
                'repetitions' => 8,
                'user_id' =>$userFirst->id
            ],
            [
                'name' => 'voador',
                'description' => 'descrição....',
                'weight' => 15,
                'times_series' => 4,
                'repetitions' => 8,
                'user_id' =>$userFirst->id
            ],
            [
                'name' => 'crucifixo',
                'description' => 'descrição....',
                'weight' => 15,
                'times_series' => 4,
                'repetitions' => 8,
                'user_id' =>$userFirst->id
            ]
        ]);
        
        $userSecond = User::where(['email' => 'leticia@gmail.com'])->get()->first();

        Train::insert([

            [
                'name' => 'supino reto',
                'description' => 'descrição....',
                'weight' => 20,
                'times_series' => 4,
                'repetitions' => 8,
                'user_id' =>$userSecond->id
            ],
            [
                'name' => 'supino inclinado',
                'description' => 'descrição....',
                'weight' => 10,
                'times_series' => 4,
                'repetitions' => 8,
                'user_id' =>$userSecond->id
            ],
            [
                'name' => 'voador',
                'description' => 'descrição....',
                'weight' => 15,
                'times_series' => 4,
                'repetitions' => 8,
                'user_id' =>$userSecond->id
            ],
            [
                'name' => 'crucifixo',
                'description' => 'descrição....',
                'weight' => 15,
                'times_series' => 4,
                'repetitions' => 8,
                'user_id' =>$userSecond->id
            ]
        ]);
    }
}
