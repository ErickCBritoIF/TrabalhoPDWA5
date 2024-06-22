<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ElementoQuimico;

class XmlController extends Controller
{
    // Pegar todos os dados e gerar um xml

    public function gerarXML(){
        
        $dados = ElementoQuimico::all();
        //print_r($dados);
        return response()->view('data-xml', ['registros' => $dados])->header('Content-Type', 'application/xml');

    }

}
