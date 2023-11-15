<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvestimentosController extends Controller
{
    public function index()
    {
        return view('site.investimentos.index');
    }

    public function create()
    {
        return view('site.investimentos.create');
    }
}
