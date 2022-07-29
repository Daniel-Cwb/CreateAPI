<?php

namespace App\Helpes;

use App\Enum\HttpCode;

class FunctionUser {
    // criando static para não dar new e poupar memoria
    // função do get

    public static function exec($users, $response){
     
        if($users->isEmpty()){
            return $response->json(
                [
                    "Message" => "is empty",
                    "users" => []
                ],
                HttpCode::NOT_FOUND
            );
        }
        return $response->json(
            [
                "users" => $users->map(function($user) {
                    return (object) [
                        "id" => $user->id,
                        "name"=> $user->name,
                        "email"=> $user->email,
                        "email_verified_at"=> $user->email_verified_at,
                        "password"=> $user->password,
                        "remember_token"=> $user->remember_token,
                        "created_at"=> $user->created_at,
                        "updated_at"=> $user->updated_at
                    ];
                })
            ],
            HttpCode::HTTP_OK
        );
    }

}