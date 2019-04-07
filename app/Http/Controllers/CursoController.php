<?php
  
namespace App\Http\Controllers;
  
use App\Curso;
use App\Professor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
  
class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$curso = DB::table('cursos')
			->leftJoin('professors', 'cursos.ID_PROFESSOR', '=', 'professors.ID_PROFESSOR')
			->select('cursos.*', 'professors.NOME as PROFESSOR')
			->get();
  
        return view('curso.index',compact('curso'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $professor= Professor::select('ID_PROFESSOR','NOME')->get();
        return view('curso.create',compact('professor'));
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Curso::create($request->all());
        return redirect()->route('curso.index')
                        ->with('success','Curso criado com sucesso.');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Curso  $Curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $Curso)
    {
		$curso = DB::table('cursos')
			->leftJoin('professors', 'cursos.ID_PROFESSOR', '=', 'professors.ID_PROFESSOR')
			->select('cursos.*', 'professors.NOME as PROFESSOR')
			->first();
			
        return view('curso.show',compact('curso'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Curso  $Curso
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $Curso)
    {
		$Professor= Professor::select('ID_PROFESSOR','NOME')->get();
        return view('curso.edit')->with('curso',$Curso)->with('professor',$Professor);
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Curso  $Curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curso $Curso)
    {
        $Curso->update($request->all());
        return redirect()->route('curso.index')
                        ->with('success','Curso atualizado com sucesso');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Curso  $Curso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $Curso)
    {
        $Curso->delete();
        return redirect()->route('curso.index')
                        ->with('success','Curso excluído com  sucesso');
    }
}