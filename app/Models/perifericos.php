<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perifericos extends Model
{
    protected $table = 'perifericos';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['periferic', 'id_marca', 'id_modelo', 'serial', 'serialA'];

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'id_marca');
    }

    public function modelo()
    {
        return $this->belongsTo(Modelo::class, 'id_modelo');
    }
}
