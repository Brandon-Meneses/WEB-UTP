<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideosCurso extends Model
{
    use HasFactory;

    protected $table = 'links_videos';

    protected $fillable = ['id_curso', 'nombre', 'url_video', 'orden'];

}
