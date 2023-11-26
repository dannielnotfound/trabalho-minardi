<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Site\ReceitasController;
use App\Models\Despesa;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {   
        // Obtém o total de despesas não pagas
        $totalDespesas = Despesa::where('status', '!=', 'A')->sum('valor');


        dd($totalDespesas);


        // // Obtém o total de receitas recebidas
        // $totalReceitas = Receitas::where('status', 'recebida')->sum('valor');

        // Calcula o balanço (receitas - despesas)
        // $balanco = $totalReceitas - $totalDespesas;

        return view('dashboard', compact('totalDespesas'));
    }
}
