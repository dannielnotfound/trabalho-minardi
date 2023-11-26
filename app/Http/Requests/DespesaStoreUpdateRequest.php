<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Enums\EnumDespesaStatus;
use App\Enums\EnumDespesaTipo;
use Illuminate\Validation\Rules\Enum;

class DespesaStoreUpdateRequest extends FormRequest
{
    
    protected $status;
    protected $tipo;

    // public function __construct(
    //     EnumDespesaStatus $status,
    //     EnumDespesaTipo   $tipo,
    // )
    // {
    //     $this->status = $status;
    //     $this->tipo = $tipo;
    // }


    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {       
        return [
            "titulo" => 'required|min:3|max:255',
            "descricao" => 'required|max:255',
            "vencimento" => "required",
            "valor" => 'required',
            "categoria" => 'max:255',
            "tipo_despesa" => 'required',
            "status" => 'required',
        ];
    }
}
