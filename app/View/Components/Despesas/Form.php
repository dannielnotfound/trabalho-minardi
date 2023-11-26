<?php

namespace App\View\Components\Despesas;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Enums\EnumDespesaStatus;
use App\Enums\EnumDespesaTipo;

class Form extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
       
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.despesas.form');
    }
}
