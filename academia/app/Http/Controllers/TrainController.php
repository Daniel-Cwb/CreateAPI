<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
// Importando a função
use App\Helpes\FuncoesTrain;

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

        

            // Vaidando se não tem campo em branco
        $request->validate([
        
            "name" => "required|string|unique:posts|string|max:150",
            "description" => "required|integer",
            "weight" => "required|integer",
            "times_series" => "required|integer",
            "repetitions" => "required|integer",
            "user_id"  => "required|integer"
        ]);

        $input = $request->all();

        $this->train->insert($input);

        return response()->json([
            "message" => "The insert was make with successfull"

        ],HttpCode::HTTP_OK);
    
    }
}
