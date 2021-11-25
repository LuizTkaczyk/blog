<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //criando validações
        return [
            'nome' => 'required|max:15',
            'descricao' => 'required|min:5',
            'categoria' => 'required|min:5'
        ];
    }

    public function attributes()
    {
        //personalizando a mensagem que aparecera na mensagem, neste caso ira substituir a palavra nome por outra frase.
        return [
            'nome' => 'nome do curso',
        ];
    }

    public function messages()
    {
        //personalizando as mensagens
        return [
            'descricao.required' => 'Deve inserir uma descrição do curso'
        ];
    }


}
