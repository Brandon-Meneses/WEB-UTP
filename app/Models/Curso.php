<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $table = 'cursos'; // no es necesario si la tabla es el plural del modelo, de preferencia definir el nombre de la tabla


}
