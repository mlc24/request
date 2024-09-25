<?php

namespace App\Http\Controllers;

use App\Http\Requests\requestMaster;
use App\Models\User;
use Illuminate\Http\Request;

class requestController extends Controller
{
    public function users(requestMaster $request){
        $user=User::create([
            'nome' => $request->nome,
            'idade' => $request->idade,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'endereco' => $request->endereco,
            'senha' => bcrypt($request->senha),
            'complemento' => $request->complemento,
        ]);
        return response()->json($user,201);
    }
}
