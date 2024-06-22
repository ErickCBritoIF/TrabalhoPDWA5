<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ElementoQuimico;

class CadastrarController extends Controller
{
    //Regra de negócio: validar e persistir dados

    public function salvar(Request $request){
        $request->validate([
            "Nome" => "required|max:20",
            "SimboloQuimico" => "required|max:2",
            "NumeroAtomico" => "required|integer",
            "MassaAtomica" => "required|decimal:6",
            "EstadoFisico" => "required"
        ],
        [
            "Nome.required" => "O campo Nome é obrigatório",
            "Nome.max" => "O campo Nome deve ter no máximo 20 caracteres",
            "SimboloQuimico.required" => "O campo Símbolo Químico é obrigatório",
            "SimboloQuimico.max" => "O campo Símbolo Químico deve ter no máximo 2 caracteres",
            "NumeroAtomico.required" => "O campo Número Atômico é obrigatório",
            "NumeroAtomico.integer" => "O campo Número Atômico deve ser um número inteiro",
            "MassaAtomica.required" => "O campo Massa Atômica é obrigatório",
            "MassaAtomica.decimal" => "O campo Massa Atômica deve ter 6 casas após a virgula",
            "EstadoFisico.required" => "O campo Estado Físico é obrigatório"
        ]
    
    );

    $obj = new ElementoQuimico();
    $obj->fill($request->all());
    $obj->save();

        //dd($request);

        return view('cadastrosalvo');

    }
}
