<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservasController extends Controller
{
    public function index()
    {
        return view('site.reservas.index');
    }

    public function create()
    {
        return view('site.reservas.create');
    }
}
