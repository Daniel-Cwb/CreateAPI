<?php

namespace App\Helpes;

use App\Enum\HttpCode;

class FuncoesTrain {
    // criando static para não dar new e poupar memoria
    // função do get
    

    public static function exec($trains, $response){
     
        if($trains->isEmpty()){
            return $response->json(
                [
                    "Message" => "is empty",
                    "trains" => []
                ],
                HttpCode::NOT_FOUND
            );
        }
        return $response->json(
            [
                "trains" => $trains->map(function($train) {
                    return (object) [
                        "id" => $train->id,
                        "name"=> $train->name,
                        "description"=> $train->description,
                        "weight"=> $train->weight,
                        "times_series"=> $train->times_series,
                        "repetitions"=> $train->repetitions,
                        "user_id" => $train->user()->get()
                    ];
                })
            ],
            HttpCode::HTTP_OK
        );
    }

}

