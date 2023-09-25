<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipos extends Model
{
    protected $table = 'equipos';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['id_marca', 'id_modelo', 'id_so', 'serial', 'serialA', 'cpu', 'velocidad', 'ram', 'disco'];

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'id_marca');
    }

    public function modelo()
    {
        return $this->belongsTo(Modelo::class, 'id_modelo');
    }
    public function sistema()
    {
        return $this->belongsTo(Sistema::class, 'id_so');
    }
    public function asignars()
    {
        return $this->hasMany(Asignar::class, 'id_equipo');
    }
}
