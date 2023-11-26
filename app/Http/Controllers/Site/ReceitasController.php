<?php

namespace App\Http\Controllers\Site;

use App\Enums\EnumReceitasTipo;
use App\Http\Controllers\Controller;
use App\Models\Receita;
use App\Models\User;
use Illuminate\Http\Request;

class ReceitasController extends Controller
{      
    protected $model;
    protected $user;

    public function __construct(Receita $model, User $user)
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
        
        
        return view('site.receitas.index', ['receitas' => $result]);
    }

    public function create()
    {
        return view('site.receitas.create', ['tipos' => EnumReceitasTipo::cases()]);
    }

    public function show(int $id)
    {
        if(! $receita = $this->model->find($id)){
            return redirect()->back();
        }


        if(! $user = $this->user->find($receita->user_id)){
            return redirect()->back();
        }

        
        return view('site.receitas.show', ['receita' => $receita, 'usuario' => $user]);
    }
    

    public function store(Request $request)
    {   

        $data = $request->validate([
            'nomeReceita' => 'required|max:255',
            'tipoReceita' => 'required',
            'dataReceita' => 'required',
            'valorReceita' =>'required',
        ]);
        
        $data['valorReceita'] = str_replace(',', '.',  $data['valorReceita']);
       
        $user = auth()->user();
        $data['user_id'] = $user->id;
        

        

        if(!$this->model->create($data)){
            return redirect()->back();
        }

        return redirect()->route('receitas.index');
    }

    public function edit(int $id)
    {   
        if(!$receita = $this->model->find($id)){
            return redirect()->back();
        }

        $receita->valorReceita = str_replace('.', ',',  $receita->valorReceita);

        return view('site.receitas.edit', ['tipos' => EnumReceitasTipo::cases(), 'receita' => $receita ]);
    }

    public function update(Request $request, $id)
    {   
        $data = $request->validate([
            'nomeReceita' => 'required|max:255',
            'tipoReceita' => 'required',
            'dataReceita' => 'required',
            'valorReceita' =>'required',
        ]);
        

        if(!$receita = $this->model->find($id)){
            return redirect()->back();
        }

        $receita->update($data);
        
        return redirect()->route('receitas.index');

    }

    public function destroy(int $id)
    {   

       
        if(!$this->model->destroy($id)){
            return redirect()->back();
        }

        return redirect()->route('receitas.index');

    }
}
