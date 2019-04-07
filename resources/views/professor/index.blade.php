@extends('professor.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>FLEXPEAK - PROFESSORES</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('professor.create') }}"> Novo Professor</a>
                <a class="btn btn-success" href="{{ route('aluno.index') }}"> Alunos</a>
                <a class="btn btn-success" href="{{ route('curso.index') }}"> Cursos</a>
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
            <th>ID_PROFESSOR</th>
            <th>NOME</th>
            <th>DATA_NASCIMENTO</th>
            <th>DATA_CRIACAO</th>
            <th width="280px">AÇÕES</th>
        </tr>
        @foreach ($professor as $a)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $a->NOME }}</td>
            <td>{{ $a->DATA_NASCIMENTO }}</td>
            <td>{{ $a->DATA_CRIACAO }}</td>
            <td>
                <form action="{{ route('professor.destroy',$a->ID_PROFESSOR) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('professor.show',$a->ID_PROFESSOR) }}">Ver</a>
    
                    <a class="btn btn-primary" href="{{ route('professor.edit',$a->ID_PROFESSOR) }}">Editar</a>
					
					{{ method_field('DELETE') }}
					{{ csrf_field() }}
                    
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $professor->links() !!}
      
@endsection