<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $table = 'cursos'; // no es necesario si la tabla es el plural del modelo, DE PREFERENCIA definir el nombre de la tabla

    public $timestamps = false; // si no se usa el created_at y updated_at en la tabla, se debe desactivar

    protected $fillable = ['nombre', 'descripcion', 'categoria', 'precio', 'url_imagen']; 
    // se debe definir los campos que se van a llenar en la tabla para que no haya sql injection o errores de seguridad
}
