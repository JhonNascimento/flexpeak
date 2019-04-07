@extends('curso.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>FLEXPEAK - CURSOS</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('curso.index') }}"> Voltar</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NOME:</strong>
                {{ $curso->NOME }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>DATA_CRIACAO:</strong>
                {{ $curso->DATA_CRIACAO }}
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>PROFESSOR:</strong>
                {{ $curso->PROFESSOR }}
            </div>
        </div>
    </div>
@endsection