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

        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'category'=>'required'
        ]);
        
        $curso = new curso();

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;

        $curso->save();
        return redirect()->route('cursos.show', $curso);
    }

    public function show(curso $curso){
        return view('cursos.show', compact('curso'));
    }

    public function edit(curso $curso){
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, curso $curso){
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;

        $curso->save();
        return redirect()->route('cursos.show', $curso);
    }
}
