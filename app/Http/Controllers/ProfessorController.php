<?php
  
namespace App\Http\Controllers;
  
use App\Professor;
use Illuminate\Http\Request;
  
class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professor = Professor::latest()->paginate(5);
        return view('professor.index',compact('professor'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('professor.create');
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Professor::create($request->all());
        return redirect()->route('professor.index')
                        ->with('success','Professor criado com sucesso.');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Professor  $Professor
     * @return \Illuminate\Http\Response
     */
    public function show(Professor $Professor)
    {
        return view('professor.show')->with('professor',$Professor);
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Professor  $Professor
     * @return \Illuminate\Http\Response
     */
    public function edit(Professor $Professor)
    {
        return view('professor.edit')->with('professor',$Professor);
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Professor  $Professor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professor $Professor)
    {
        $Professor->update($request->all());
        return redirect()->route('professor.index')
                        ->with('success','Professor atualizado com sucesso');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Professor  $Professor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professor $Professor)
    {
        $Professor->delete();
        return redirect()->route('professor.index')
                        ->with('success','Professor excluído com sucesso');
    }
}