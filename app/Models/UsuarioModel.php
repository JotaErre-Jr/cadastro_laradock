<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioModel extends Model
{
    use HasFactory;
    protected $table = 'usuario';

    public static function listar(int $limite){
        $sql = self::select([
            "id",
            "nome",
            "email",
            "data_cadastro"
        ])->limit($limite);

        dd($sql->toSql());
    }

    public static function cadastrar(Request $request){
        $sql = self::insert([
            "nome" => $request->input('nome'),
            "email" => $request->input('email'),
            "data_cadastro" => DB::raw('NOW()')
        ]);

        dd($sql->toSql(), $request->all());
    }
}
