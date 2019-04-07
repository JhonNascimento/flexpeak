@extends('professor.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
				<h2>FLEXPEAK - PROFESSORES</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('professor.index') }}"> Voltar</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NOME:</strong>
                {{ $professor->NOME }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>DATA_NASCIMENTO:</strong>
                {{ $professor->DATA_NASCIMENTO }}
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>DATA_CRIACAO:</strong>
                {{ $professor->DATA_CRIACAO }}
            </div>
        </div>
    </div>
@endsection