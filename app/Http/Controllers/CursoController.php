<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

use App\Http\Requests\StoreCurso;

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


    //$request é um objeto do tipo StoreCurso, fazendo assim as validações
    public function store(StoreCurso $request)
    {
        //SALVANDO OS REGISTROS

        // $curso = new Curso();

        // $curso->nome = $request->nome;
        // $curso->descricao = $request->descricao;
        // $curso->categoria = $request->categoria;

        // $curso->save();


        // $curso = Curso::create([
        //     'nome' => $request->nome,
        //     'descricao' => $request->descricao,
        //     'categoria' => $request->categoria
        // ]);

        //cria os campos no bd dinamicamente
        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show', $curso);
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
        // $curso->nome = $request->nome;
        // $curso->categoria = $request->categoria;
        // $curso->descricao = $request->descricao;

        // $curso->save();

        $curso->update($request->all());

        return redirect()->route('cursos.show', $curso->id);
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect()->route('cursos.index');
        
    }
}
