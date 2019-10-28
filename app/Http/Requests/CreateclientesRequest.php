<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\clientes;

class CreateclientesRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return clientes::$rules;
    }

    public function messages()
    {
        return [
             'nome.required' => 'E necessario o Nome!',
             'telefone.required' => 'Telefone e necesario!',
               'endereco.required' => 'Endereço é Necessario',
        'estado.required' => 'Estado é Necessaro',
        'bairro.required' => 'Bairro é Necessario',
    //    'complemento' => 'required',
        'localidade.required' => 'Localidade é Necessaria',
        'numero.required' => 'Numero é Necessario',
        'telefone.required' => 'Telefone é necessario',
        'nascimento.required' => 'Data de Nascimento é necessaria',
        'cep.required' => 'Cep e necessario'
    
        ];
    }
}
