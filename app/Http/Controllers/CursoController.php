<?php

namespace App\Http\Controllers;

use App\Models\curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        $cursos = curso::orderBy('id','desc')->paginate(10);
        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(Request $request){
        $curso = new curso();

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;

        $curso->save();
        return redirect()->route('cursos.show', $curso);
    }

    public function show($id){
        $curso = curso::find($id);
        return view('cursos.show', compact('curso'));
    }
}
