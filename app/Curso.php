<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $primaryKey = 'ID_CURSO';
	
	protected $fillable = [
		'ID_CURSO',
        'NOME', 
		'DATA_CRIACAO',
		'ID_PROFESSOR'
    ];
}
