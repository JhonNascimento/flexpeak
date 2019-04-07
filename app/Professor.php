<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{	
	protected $primaryKey = 'ID_PROFESSOR';
	
    protected $fillable = [
		'ID_PROFESSOR',
        'NOME', 
		'DATA_NASCIMENTO',
		'DATA_CRIACAO'
    ];
}
