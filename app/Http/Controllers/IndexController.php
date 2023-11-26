<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Site\ReceitasController;
use App\Models\Despesa;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {   
        return view('welcome');
    }
}
