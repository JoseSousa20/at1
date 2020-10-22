<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    //
    public $equipas = [
        'CD Aves',
        'FC Porto',
        'SL Benfica',
        'Vitoria SC',
        'SC Braga'
    ];

    public function index() {
        return  view('entrada');
    }
    public function listarEquipas () {
        
        return view('equipas' ,['equipas' => $this -> equipas]);
    }
    public function listarEquipa (Request $request) {
        
        $contar = count($this -> equipas);
        $n = is_numeric($request -> chave); 
    if(isset($request -> chave)) {
        if($request -> chave  >= 0 && $request -> chave < $contar && $n){
            $this ->equipas = $this -> equipas[$request -> chave];
        } 
        else{
            $this ->equipas = 'Erro';
        }
        return view('equipas', ['equipa' => $this -> equipa]);
    }
    else{
        return view('equipas', ['equipa' => $this -> equipas]);
    }
}
    public function mostrarform () {
        return view('contacto');
    }

    public function processarform (Request $req) {
        $nome = $req -> nome;
        $morada = $req -> morada;
        $automovel = $req -> automovel;

        return view('form-enviado' , [
        'nome' =>$nome,
        'morada' =>$morada,
        'automovel' =>$automovel
        ]);
    }
}

