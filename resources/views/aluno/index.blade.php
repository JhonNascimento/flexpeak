@extends('aluno.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>FLEXPEAK - ALUNOS</h2>
            </div> 
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('aluno.create') }}"> Novo Aluno</a>
                <a class="btn btn-success" href="{{ route('curso.index') }}"> Cursos</a>
                <a class="btn btn-success" href="{{ route('professor.index') }}"> Professores</a>
                <a class="btn btn-success" target='_blank' href="{{ url('pdf') }}"> PDF</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>ID_ALUNO</th>
            <th>NOME</th>
            <th>DATA_NASCIMENTO</th>
            <th>CURSO</th>
            <th>PROFESSOR</th>
            <th>ENDERECO</th>
            <th width="280px">AÇÕES</th>
        </tr>
        @foreach ($aluno as $a)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $a->NOME }}</td>
            <td>{{ $a->DATA_NASCIMENTO }}</td>
            <td>{{ $a->CURSO }}</td>
            <td>{{ $a->PROFESSOR }}</td>
            <td>{{ $a->CEP }} - {{ $a->LOGRADOURO }} - {{ $a->NUMERO }} - {{ $a->BAIRRO }} - {{ $a->CIDADE }} - {{ $a->ESTADO }}</td>
            <td>
                <form action="{{ route('aluno.destroy',$a->ID_ALUNO) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('aluno.show',$a->ID_ALUNO) }}">Ver</a>
    
                    <a class="btn btn-primary" href="{{ route('aluno.edit',$a->ID_ALUNO) }}">Editar</a>
					
					{{ method_field('DELETE') }}
					{{ csrf_field() }}
                    
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
@endsection