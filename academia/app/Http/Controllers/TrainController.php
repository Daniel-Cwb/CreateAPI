<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
// Importando a função
use App\Helpes\FuncoesTrain;

use Validator;

use App\Enum\HttpCode;


class TrainController extends Controller
{
    /** declarando o atributo
     *  @param App\Models\Train
     */

    public $train;

    

    public function __construct(){
        $this->train = new Train();
    
    }
   

    public function getAll() {
        
        return FuncoesTrain::exec(
            $this->train->get(),
            response()
        );
    }

    // Função com o Id

    public function getById($id)
    {
        return FuncoesTrain::exec(
            $this->train->where(['id' => $id])->get(),
            response()
        );

    }

    // Metodo Post
    public function insert(Request $request) {

        $input = $request->all();

            // Vaidando se não tem campo em branco
        $validator = Validator::make(
            $input,
            [
        
            "name" => "required|string|string|max:150",
            "description" => "required|string",
            "weight" => "required|integer|min:1|max:800",
            "times_series" => "required|integer|min:1|max:40",
            "repetitions" => "required|integer|min:1|max:150",
            "user_id" => "required|integer|min:1"
            ]
        );
        $this->train->insert($input);

        if ($validator->fails()) {

            return response()->json(
                [
                    "message" => $validator->mensager()
    
                ],
                HttpCode::NOT_ACCEPTABLE
            );
        }

        

       

        return response()->json(
            [
                "message" => "The insert was make with successfull"

            ],
        HttpCode::HTTP_OK
        );
    
    }
}
