<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCursoRequest;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index()
    {
        //$cursos = Curso::all();
        $cursos = Curso::OrderBy('id', 'desc')->paginate(); //?page=3

        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(StoreCursoRequest $request)
    {

        /* $curso =  new Curso;
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;

        $curso->save(); */

        /* $curso = Curso::create([
            'name' => $request->name,
            'description' => $request->description,
            'category' =>  $request->category,
        ]); */

        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show', $curso->id);
    }


    /* public function show($id)
    {

        $curso =  Curso::find($id);

        //return view('cursos.show', ['curso' => $curso]);
        return view('cursos.show', compact('curso'));
    } */

    public function show(Curso $curso)
    {
        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }


    public function update(StoreCursoRequest $request, Curso $curso)
    {
        /* $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;

        $curso->save(); */

        $curso->update($request->all());

        return redirect()->route('cursos.show', $curso);
    }


    public function destroy(Curso $curso)
    {
        $curso->delete();

        return redirect()->route('cursos.index');
    }
}
