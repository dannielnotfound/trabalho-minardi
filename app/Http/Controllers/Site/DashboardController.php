<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Despesa;
use App\Models\Receita;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{   

    public function index(Request $request)
    {
        $mes = ($request->query('mes'));
        // Obtém o usuário autenticado
        $usuarioLogado = auth()->user();

        // Se $mes não for fornecido, assume o mês atual
        $mes = $mes ?? Carbon::now()->month;

        $primeiroDiaMes = Carbon::createFromDate($usuarioLogado->created_at->format('Y'), $mes, 1)->startOfMonth();

        // Obtém o último dia do mês
        $ultimoDiaMes = $primeiroDiaMes->endOfMonth();

        // Recupera despesas do usuário logado no mês e anos anteriores
        $despesas = Despesa::where('user_id', $usuarioLogado->id)
            ->whereYear('vencimento', '>=', $primeiroDiaMes->year)
            ->whereMonth('vencimento', '=', $mes)
            ->get();

        // Recupera receitas do usuário logado no mês atual
        $receitas = Receita::where('user_id', $usuarioLogado->id)
            ->whereYear('dataReceita', '=', $primeiroDiaMes->year)
            ->whereMonth('dataReceita', '=', $mes)
            ->get();

        // Recupera todas as despesas do usuário logado
        $todasDespesas = Despesa::where('user_id', $usuarioLogado->id)->get();

        // Recupera todas as receitas do usuário logado
        $todasReceitas = Receita::where('user_id', $usuarioLogado->id)->get();

        // Calcule o total de despesas do mês
        $totalDespesas = $despesas->sum('valor');

        // Calcule o total de receitas do mês
        $totalReceitas = $receitas->sum('valorReceita');

        // Calcule o saldo do mês (receitas - despesas)
        $saldoMes = $totalReceitas - $totalDespesas;

        // Calcule o total de despesas acumulado
        $totalDespesasAcumulado = $todasDespesas->sum('valor');

        // Calcule o total de receitas acumulado
        $totalReceitasAcumulado = $todasReceitas->sum('valorReceita');

        // Calcule o saldo acumulado (receitas - despesas)
        $saldoAcumulado = $totalReceitasAcumulado - $totalDespesasAcumulado;

        return view('site.home.dashboard', compact('totalDespesas', 'totalReceitas', 'saldoMes', 'totalDespesasAcumulado', 'totalReceitasAcumulado', 'saldoAcumulado', 'mes'));
    }
}
