@extends('curso.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>FLEXPEAK - CURSOS</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('curso.create') }}"> Novo Curso</a>
                <a class="btn btn-success" href="{{ route('aluno.index') }}"> Alunos</a>
                <a class="btn btn-success" href="{{ route('professor.index') }}"> Professores</a>
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
            <th>ID_CURSO</th>
            <th>NOME</th>
            <th>DATA_CRIACAO</th>
            <th>PROFESSOR</th>
            <th width="280px">AÇÕES</th>
        </tr>
        @foreach ($curso as $a)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $a->NOME }}</td>
            <td>{{ $a->DATA_CRIACAO }}</td>
            <td>{{ $a->PROFESSOR }}</td>
            <td>
                <form action="{{ route('curso.destroy',$a->ID_CURSO) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('curso.show',$a->ID_CURSO) }}">Ver</a>
    
                    <a class="btn btn-primary" href="{{ route('curso.edit',$a->ID_CURSO) }}">Editar</a>
					
					{{ method_field('DELETE') }}
					{{ csrf_field() }}
                    
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    
      
@endsection