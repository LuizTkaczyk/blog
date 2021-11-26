<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;


    //inserindo os valores no bd, evitando o erro *Add [_token] to fillable property to allow mass assignment on [App\Models\Curso].*, evitando os campos protegidos

    //protected $fillable = ['nome', 'descricao', 'categoria'];

    //com guarded é o contrário, ignorando os campos permitidos
    protected $guarded = [];


    //função para url amigavel
    public function getRouteKeyName()
    {
        return 'slug';
    }


}
