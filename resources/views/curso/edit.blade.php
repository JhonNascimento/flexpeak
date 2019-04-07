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
  
    <form action="{{ route('curso.update',$curso->ID_CURSO) }}" method="POST">
        {{ method_field('PATCH') }}
		{{ csrf_field() }}
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="NOME">NOME: <span class="text-danger">*</span></label>
                    <input type="text" id="NOME" name="NOME" value="{{ $curso->NOME }}" class="form-control" placeholder="NOME">
                </div>
            </div>
            
			<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="DATA_CRIACAO">DATA_CRIACAO: <span class="text-danger">*</span></label>
                    <input type="date" id="DATA_CRIACAO" name="DATA_CRIACAO" value="{{ $curso->DATA_CRIACAO }}" class="form-control" placeholder="cidade" />
                </div>
            </div>
			
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<label for="ID_PROFESSOR">ID_PROFESSOR: <span class="text-danger">*</span></label>
					<select name="ID_PROFESSOR" class="form-control" required>
						<option>--Selecione--</option>
						@foreach($professor as $c)
						 <option <?php echo ($c->ID_PROFESSOR == $curso->ID_PROFESSOR ? 'selected' : ''); ?> value="{{ $c->ID_PROFESSOR}}">{{ $c->NOME}}</option>
						@endforeach
					</select>
				</div>
			</div>
			
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
   
    </form>
@endsection