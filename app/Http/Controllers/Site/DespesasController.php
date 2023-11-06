<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Despesa;
use App\Http\Requests\DespesaStoreUpdateRequest;

use Illuminate\Http\Request;

class DespesasController extends Controller
{      

    protected $model;

    public function __construct(Despesa $model)
    {
        $this->model = $model;
    }

    public function index()
    {   
        return view('site.despesas.index');
    }

    public function show(Int $id)
    {   
        if(!$this->model->find($id)){
            return redirect()->back();
        }

        $despesa = $this->model->find($id);

        return view('site.despesas.show', ['despesa' => $despesa]);
    }

    public function store(DespesaStoreUpdateRequest $request)
    {   
        $data = $request->all();

        if(!$this->model->create($data)){
            return redirect()->back(); //Error
        }

        $despesa = $this->model;
        return view('site.despesas.show', ['despesa' => $despesa]);
    }

    public function update(DespesaStoreUpdateRequest $request, $id)
    {   
        $data = $request->all();

        if(!$this->model->find($id)){
            return redirect()->back();
        }

        $despesa = $this->model->find($id);

        return view('site.despesas.show', ['despesa' => $despesa]);
    }
}
