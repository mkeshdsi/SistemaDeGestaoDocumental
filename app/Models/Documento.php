<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;
    protected $fillable = ['nome_cliente', 'contacto', 'descricao', 'documento_path', 'formulario_path'];

}
