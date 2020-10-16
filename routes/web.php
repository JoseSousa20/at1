<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/toni', function () {
    return view('welcome');
});

Route::get('/bem-vindo', function () {
    echo('olá Mundo');
});

Route::get('/', function() {
    echo ('<h1> Olá Mundo </h1>');
});

Route::get('/bem-vindo/aedah', function() {
    echo('<h1>esta é só para o Agrupamento :) </h1>');
});

Route::get('/nome/{nome}', function ($nome) {
    echo('<h1>Olá '. $nome . '</h1>');
});

Route::get('/nome/{nome}/{apelido}', function($nome, $apelido) {
    echo('<h1>Olá '.$nome. ' '. $apelido. '</h1>');
});

Route::get('/nomes/{nome}/{vezes}', function($nome, $vezes)  {
    for($i=1; $i <= $vezes;$i++) 
    {
    echo($nome);
    echo('<br>');
    }
});

Route::get('/repetir/{nome}/{num}', function($nome, $n) {
    $numero = is_numeric($n) ? $n : 5;
    for($i=0 ; $i < $numero; $i++){
        echo('<h1>Olá '.$nome .'>/h1>');
    }
   return; 
});

Route::get('welcome', function() {
    return view('bemvindo');
});

Route::get('/nomes2/{name}/{surname}', function ($nome=null, $apelido=null){
   return view('mostranome', ['nome' => $nome, 'apelido' => $apelido
   ]); 
});

Route::get('/tarefas', function(){
    $tarefas = [
        'Comprar senha',
        'Imprimir fotocópias',
        'Carregar cartão',
        'Entregar Fotocópias'
    ];
    return view('tarefas', ['tarefas' => $tarefas]);
});

Route::get('/entrada', 'App\Http\Controllers\PortalController@index');

Route::get('/equipas', 'App\Http\Controllers\PortalController@listarEquipas');

Route::get('/listar-equipas/{chave}', 'App\Http\Controllers\PortalController@listarEquipa');
