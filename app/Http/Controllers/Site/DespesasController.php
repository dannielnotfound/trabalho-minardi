<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Despesa;
use App\Http\Requests\DespesaStoreUpdateRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Enums\EnumDespesaStatus;
use App\Enums\EnumDespesaTipo;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class DespesasController extends Controller
{      

    protected $model;
    protected $user;

    public function __construct(Despesa $model, User $user )    

    {   
        $this->model = $model;
        $this->user = $user;
    }

    public function index()
    {        
        $user_id =   Auth()->user()->id;

        $result = $this->model->where(function ($query) use ($user_id){
            if($user_id){
                $query->where('user_id', $user_id);
            }
        })->paginate();
        
        
        return view('site.despesas.index', ['despesas' => $result]);
    }



    public function create():View
    {   
        return view('site.despesas.create', ['tipos' => EnumDespesaTipo::cases(), 'status' => EnumDespesaStatus::cases() ]);
    }

    public function show(Int $id)
    {   
        if(! $despesa = $this->model->find($id)){
            return redirect()->back();
        }


        if(! $user = $this->user->find($despesa->user_id)){
            return redirect()->back();
        }

        
        return view('site.despesas.show', ['despesa' => $despesa, 'usuario' => $user]);
    }

    public function store(DespesaStoreUpdateRequest $request)
    {   

        $data = $request->validated();

        if (!auth()->user()){
           return view('welcome');
        };

        $user = auth()->user();
        
        $data['valor'] = str_replace(',', '.',  $data['valor']);;
        $data['user_id'] = $user->id;
      

        if(!$this->model->create($data)){
            return redirect()->back(); //Error
        }

        return redirect()->route('despesas.index');
    }

    public function edit(int $id)
    {   
        if(! $despesa = $this->model->find($id)){
            return redirect()->back();
        }


        return view('site.despesas.edit', ['tipos' => EnumDespesaTipo::cases(), 'status' => EnumDespesaStatus::cases(), 'despesa' => $despesa ]);
    }

    public function update(DespesaStoreUpdateRequest $request, $id)
    {   
        $data = $request->all();
        

        if(!$despesa = $this->model->find($id)){
            return redirect()->back();
        }

        $despesa->update($data);
        
        return redirect()->route('despesas.index');

    }

    public function destroy(int $id)
    {   

       
        if(!$this->model->destroy($id)){
            return redirect()->back();
        }

        return redirect()->route('despesas.index');

    }
}
