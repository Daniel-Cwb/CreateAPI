<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Helpes\FunctionUser;

use App\Enum\HttpCode;


class UseController extends Controller
{
    /** declarando o atributo
     *  @param App\Models\User
     */

    public $user;

    public function __construct(){
        $this->user = new User();
    
    }

    public function getUserId($id)
    {
        return FunctionUser::exec(
            $this->user->where(['id' => $id])->get(),
            response()
        );

    }

    


}
