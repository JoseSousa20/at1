<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    //
    public function index() {
        return  view('entrada');
    }
    public function listarEquipas () {
        $equipas = [
            'CD Aves',
            'FC Porto',
            'SL Benfica',
            'Vitoria SC',
            'SC Braga'
        ];
        return view('equipas' ,['equipas' => $equipas]);
    }
    public function listarEquipa (Request $request) {
        $equipas = [
            'CD Aves',
            'FC Porto',
            'SL Benfica',
            'Vitoria SC',
            'SC Braga'
        ];
        $contar = count($equipas);
        
        if($request -> chave  >= 0 && $request -> chave < $contar){
            $equipa = $equipas[$request -> chave];
        } 
        else{
            $equipa = 'Erro';
        }
        return view('equipas', ['equipa' => $equipa]);
    }

}
