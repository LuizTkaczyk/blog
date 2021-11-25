<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;



class CursoController extends Controller
{
    public function index()
    {
        //recebendo todos os dados dos cursos do bd, e mostrando apenas 10 de cada vez com o paginate, ordenando por id e de maneira decrescente
        $cursos = Curso::orderBy('id', 'desc')->paginate(10);
        //a variavel cursos é chamada com compact , mais sem o simbolo do dolar
        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {
        //SALVANDO OS REGISTROS

        //criando validações
        $request->validate([
            'nome' => 'required|max:15',
            'descricao' => 'required|min:5',
            'categoria' => 'required|min:5'
        ]);

        $curso = new Curso();

        $curso->nome = $request->nome;
        $curso->descricao = $request->descricao;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect()->route('cursos.show', $curso->id);
    }

    public function show(Curso $curso)
    {
        //recuperando os dados por curso
        //$curso = Curso::find($curso);

        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso)
    {
        return view('cursos.editar', compact('curso'));
    }

    public function update(Request $request, Curso $curso)
    {
         //criando validações PARA A EDIÇÃO
         $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'categoria' => 'required'
        ]);

        //o parametro nome do bando de dados recebe o parametro nome do formulario
        $curso->nome = $request->nome;
        $curso->categoria = $request->categoria;
        $curso->descricao = $request->descricao;

        $curso->save();
        return redirect()->route('cursos.show', $curso->id);
    }
}
