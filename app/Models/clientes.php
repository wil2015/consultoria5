<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class clientes
 * @package App\Models
 * @version October 27, 2019, 8:46 pm UTC
 *
 * @property string nome
 * @property string endereco
 * @property string estado
 * @property string bairro
 * @property string complemento
 * @property string localidade
 * @property integer numero
 * @property string telefone
 * @property string nascimento
 * @property string cep
 */
class clientes extends Model
{

    public $table = 'clientes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'nome',
        'endereco',
        'estado',
        'bairro',
        'complemento',
        'localidade',
        'numero',
        'telefone',
        'nascimento',
        'cep'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'endereco' => 'string',
        'estado' => 'string',
        'bairro' => 'string',
        'complemento' => 'string',
        'localidade' => 'string',
        'numero' => 'integer',
        'telefone' => 'string',
        'nascimento' => 'date',
        'cep' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required',
        'endereco' => 'required',
        'estado' => 'required',
        'bairro' => 'required',
    //    'complemento' => 'required',
        'localidade' => 'required',
        'numero' => 'required',
        'telefone' => 'required',
        'nascimento' => 'required',
        'cep' => 'required'
    ];

    
}
