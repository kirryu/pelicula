<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeliculaModel extends Model
{
    protected $table="tbl_pelicula";
    protected $primaryKey = "id_pelicula";
    protected $fillable=array('id_pelicula ','titulo ','genero ','resumen','precio');
}
