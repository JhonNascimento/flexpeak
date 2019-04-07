<?php
  
namespace App\Http\Controllers;

use App;
use App\Aluno;
use App\Curso;
use Illuminate\Http\Request;
use JansenFelipe\CepGratis\CepGratis;
use Illuminate\Support\Facades\DB;
 
class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$aluno = DB::table('alunos')
			->leftJoin('cursos', 'alunos.ID_CURSO', '=', 'cursos.ID_CURSO')
			->leftJoin('professors', 'cursos.ID_PROFESSOR', '=', 'professors.ID_PROFESSOR')
			->select('alunos.*', 'cursos.NOME as CURSO', 'professors.NOME as PROFESSOR')
			->get();
		
        return view('aluno.index',compact('aluno'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$curso= Curso::select('ID_CURSO','NOME')->get();
        return view('aluno.create',compact('curso'));
    }
	
	public function pdf(Aluno $Aluno)
    {
		$aluno = DB::table('alunos')
			->leftJoin('cursos', 'alunos.ID_CURSO', '=', 'cursos.ID_CURSO')
			->leftJoin('professors', 'cursos.ID_PROFESSOR', '=', 'professors.ID_PROFESSOR')
			->select('alunos.*', 'cursos.NOME as CURSO', 'professors.NOME as PROFESSOR')
			->get();
		
		$html ='<h1>Relatório FLEXPEAK</h1>';
		
		foreach ($aluno as $p){
			$html .= '<ul>';
				$html .= "<li>ID_ALUNO: 		".$p->ID_ALUNO."</li>";
				$html .= "<li>NOME: 			".$p->NOME."</li>";
				$html .= "<li>DATA_NASCIMENTO: 	".$p->DATA_NASCIMENTO."</li>";
				$html .= "<li>ENDERECO: 		".$p->CEP." - ".$p->LOGRADOURO." - ".$p->NUMERO." - ".$p->BAIRRO." - ".$p->CIDADE." - ".$p->ESTADO."</li>";
				$html .= "<li>CURSO: 			".$p->CURSO." - ".$p->PROFESSOR."</li>";
			$html .= '</ul>';
		}
		
        $pdf = App::make('dompdf.wrapper');
		$pdf->loadHTML($html);
		return $pdf->stream();
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Aluno::create($request->all());
        return redirect()->route('aluno.index')->with('success','Aluno criado com sucesso.');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Aluno  $Aluno
     * @return \Illuminate\Http\Response
     */
    public function show(Aluno $Aluno)
    {
        $aluno = DB::table('alunos')
			->leftJoin('cursos', 'alunos.ID_CURSO', '=', 'cursos.ID_CURSO')
			->leftJoin('professors', 'cursos.ID_PROFESSOR', '=', 'professors.ID_PROFESSOR')
			->select('alunos.*', 'cursos.NOME as CURSO', 'professors.NOME as PROFESSOR')
			->first();
			
        return view('aluno.show',compact('aluno'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aluno  $Aluno
     * @return \Illuminate\Http\Response
     */
    public function edit(Aluno $Aluno)
    {
		$Curso= Curso::select('ID_CURSO','NOME')->get();
        return view('aluno.edit')->with('aluno',$Aluno)->with('curso',$Curso);
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aluno  $Aluno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aluno $Aluno)
    {
        $Aluno->update($request->all());
        return redirect()->route('aluno.index')
                        ->with('success','Aluno atualizado com sucesso');
    }
	
	public function buscacep(Request $request)
    {
		$dados = CepGratis::search($request->get('term'));	
        return response()->json($dados);
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aluno  $Aluno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aluno $Aluno)
    {
        $Aluno->delete();
        return redirect()->route('aluno.index')
                        ->with('success','Aluno excluído com sucesso');
    }
}