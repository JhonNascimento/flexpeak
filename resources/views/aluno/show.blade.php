@extends('aluno.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>FLEXPEAK - ALUNOS</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('aluno.index') }}"> Voltar</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NOME:</strong>{{ $aluno->NOME }}
            </div>
            <div class="form-group">
                <strong>DATA_NASCIMENTO:</strong>{{ $aluno->DATA_NASCIMENTO }}
            </div>
            <div class="form-group">
                <strong>ENDEREÇO:</strong>
				{{ $aluno->CEP }} - {{ $aluno->LOGRADOURO }} - {{ $aluno->NUMERO }} - {{ $aluno->BAIRRO }} - {{ $aluno->CIDADE }} - {{ $aluno->ESTADO }}
            </div>
            <div class="form-group">
                <strong>DATA_CRIACAO:</strong>{{ $aluno->DATA_CRIACAO }}
            </div>
            <div class="form-group">
                <strong>CURSO:</strong>{{ $aluno->CURSO }} - {{ $aluno->PROFESSOR }}
            </div>
        </div>
		
    </div>
@endsection