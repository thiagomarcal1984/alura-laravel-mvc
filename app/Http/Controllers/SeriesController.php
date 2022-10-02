<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Js;

class SeriesController extends Controller
{
    public function index(){
        $series = [
            'Punisher',
            'Lost',
            'Grey\'s Anatomy',
        ];

        return view('series.index')->with('series', $series);
    }

    public function create(){
        return view('series.create');
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
