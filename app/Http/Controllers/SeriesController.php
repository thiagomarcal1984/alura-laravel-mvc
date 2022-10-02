<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Js;

class SeriesController extends Controller
{
    public function index(){
        // $series = Serie::all(); // Retorna todos os registros da tabela series.
        $series = Serie::query() // Declara a query.
            ->orderBy('nome', 'asc') // Define a ordenação  (asc ou desc) e por qual coluna.
            ->get(); // Executa a query.
        // dd($series); // var_dump && die do Laravel.
        return view('series.index')->with('series', $series);
    }

    public function create(){
        return view('series.create');
    }
    
    public function store(Request $request){
        $nome = $request->input('nome');
        $serie = new Serie();
        $serie->nome = $nome;
        $serie->save();

        return redirect('/series');
    }

    public function exemplo(){
        $frutas = Js::from(['pera', 'uva', 'maçã', 'salada mista']);
        // Valor: JSON.parse('[\u0022pera\u0022,\u0022uva\u0022,\u0022ma\\u00e7\\u00e3\u0022,\u0022salada mista\u0022]')
        $alerta = "javascript:alert('Você clicou no botão.');";
        
        return view('series.exemplo')
            ->with('frutas', $frutas)
            ->with('alerta', $alerta);
    }
}
