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
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('professor.update',$professor->ID_PROFESSOR) }}" method="POST">
		{{ csrf_field() }}
        {{ method_field('PUT') }}
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="NOME">NOME: <span class="text-danger">*</span></label>
                    <input type="text" id="NOME" name="NOME" value="{{ $professor->NOME }}" class="form-control" placeholder="Name">
                </div>
            </div>
            
			<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="DATA_NASCIMENTO">DATA_NASCIMENTO: <span class="text-danger">*</span></label>
                    <input type="date" id="DATA_NASCIMENTO" name="DATA_NASCIMENTO" value="{{ $professor->DATA_NASCIMENTO }}" class="form-control" placeholder="cidade" />
                </div>
            </div>
			
			<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="DATA_CRIACAO">DATA_CRIACAO: <span class="text-danger">*</span></label>
                    <input type="date" id="DATA_CRIACAO" name="DATA_CRIACAO" value="{{ $professor->DATA_CRIACAO }}" class="form-control" placeholder="cidade" />
                </div>
            </div>
			
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
   
    </form>
@endsection