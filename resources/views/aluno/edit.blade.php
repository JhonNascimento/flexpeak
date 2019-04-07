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
  
    <form action="{{ route('aluno.update',$aluno->ID_ALUNO) }}" method="POST">
        {{ method_field('PATCH') }}
		{{ csrf_field() }}
   
		<div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="NOME">NOME: <span class="text-danger">*</span></label>
                    <input type="text" name="NOME" id="NOME" value="{{ $aluno->NOME }}" class="form-control" placeholder="NOME">
                </div>
                <div class="form-group">
                    <label for="CEP">CEP: <span class="text-danger">*</span></label>
                    <input id="CEP" name="CEP" value="{{ $aluno->CEP }}" type="text" class="form-control" placeholder="CEP" />
					<button id='buscacep' class="btn btn-success" type='button'>Pesquisar CEP</button>
					<span id='statuscep'></span>
                </div>
            
				<script type="text/javascript">
					var route = "{{ url('buscacep') }}";
					$('#buscacep').on('click',function(){
						
						$('#statuscep').html('Pesquisando!!!');
						
						$.ajax({
							type : 'get',
							url : route,
							data:{'term':$('#CEP').val()},
							success:function(data){
								
								$('#CIDADE').val(data.city);
								$('#LOGRADOURO').val(data.street);
								$('#BAIRRO').val(data.neighborhood);
								$('#ESTADO').val(data.state);
								
								$('#statuscep').html('Encontrado!!!');
							},
							error:function(data){
								$('#statuscep').html('Erro!!!');
							}
						});
					})
				</script>
				
				<div class="form-group">
					<label for="LOGRADOURO">LOGRADOURO: <span class="text-danger">*</span></label>
					<input type="text" id="LOGRADOURO" value="{{ $aluno->LOGRADOURO }}" name="LOGRADOURO" class="form-control" autofocus required>
				</div>
				<div class="form-group">
					<label for="NUMERO">NUMERO: <span class="text-danger">*</span></label>
					<input type="number" id="NUMERO" value="{{ $aluno->NUMERO }}" name="NUMERO" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="BAIRRO">BAIRRO: <span class="text-danger">*</span></label>
					<input type="text" id="BAIRRO" value="{{ $aluno->BAIRRO }}" name="BAIRRO" class="form-control" autofocus required>
				</div>
				<div class="form-group">
					<label for="CIDADE">CIDADE: <span class="text-danger">*</span></label>
					<input type="text" id="CIDADE" value="{{ $aluno->CIDADE }}" name="CIDADE" class="form-control" autofocus required>
				</div>
				<div class="form-group">
					<label for="ESTADO">ESTADO: <span class="text-danger">*</span></label>
					<input type="text" id="ESTADO" value="{{ $aluno->ESTADO }}" name="ESTADO" class="form-control" autofocus required>
				</div>
				<div class="form-group">
					<label for="DATA_CRIACAO">DATA_CRIACAO: <span class="text-danger">*</span></label>
					<input type="date" id="DATA_CRIACAO" value="{{ $aluno->DATA_CRIACAO }}" name="DATA_CRIACAO" class="form-control" autofocus required>
				</div>
				<div class="form-group">
					<label for="ID_CURSO">ID_CURSO: <span class="text-danger">*</span></label>
					<select name="ID_CURSO" class="form-control" required>
						<option>--Selecione--</option>
						@foreach($curso as $c)
						 <option  <?php echo ($c->ID_CURSO == $aluno->ID_CURSO ? 'selected' : ''); ?> value="{{ $c->ID_CURSO}}">{{ $c->NOME}}</option>
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