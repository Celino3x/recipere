<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Visitante;

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

Route::get('/', function() {
    return view('welcome');
});

Route::post('/cadastrar_visitante', function(Request $informacoes) {
    Visitante::create([
        'nome' => $informacoes->nome,
        'cpf' => $informacoes->cpf,
        'data_nascimento' => $informacoes->data_nascimento,
        'endereco' => $informacoes->endereco,
        'cep' => $informacoes->cep
    ]);
    ?><section class="container">
    <h1><?php echo "Visitante Cadastrado com Sucesso!"; ?></h1>
    </section><?php
});

Route::get('/listar_visitantes/{id}', function($id) {
    $visitante = Visitante::findOrFail($id);
    echo $visitante->nome;
    echo "<br/>";
    echo $visitante->cpf;
});

Route::get('/editar_visitantes/{id}', function($id) {
    $visitante = Visitante::findOrFail($id);
    return view('editar_visitantes', ['visitante'=> $visitante]);
});

Route::put('/atualizar_visitante/{id}', function(Request $informacoes, $id){
    $visitante = Visitante::findOrFail($id);
    $visitante->nome = $informacoes->nome;
    $visitante->cpf = $informacoes->cpf;
    $visitante->data_nascimento = $informacoes->data_nascimento;
    $visitante->endereco = $informacoes->endereco;
    $visitante->cep = $informacoes->cep;
    $visitante->save();
    echo "Visitante Atualizado com Sucesso!";
});

Route::get('/excluir_visitante/{id}', function ($id){
    $visitante = Visitante::findOrFail($id);
    $visitante->delete();
    echo "Visitante Ecluído com sucesso!";
});
