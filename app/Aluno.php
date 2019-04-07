<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
	protected $primaryKey = 'ID_ALUNO';
	
	protected $fillable = [
		'ID_ALUNO',
        'NOME', 
		'DATA_NASCIMENTO',
		'LOGRADOURO',
		'NUMERO',
		'BAIRRO',
		'CIDADE',
		'ESTADO',
		'ESTADO',
		'CEP',
		'DATA_CRIACAO',
		'ID_CURSO'
    ];
}
