<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;

class Bitacora extends Model
{
	protected $table = 'historico_sidi';
    protected $fillable = ['id','tablaafectada','operacion','fecha','usuario_bd','usuario','datos_nuevos','datos_viejos'];

    // public static function log($model, $event)  
	// {
	// 	$oldValues = null;
	// 	$newValues = null;
	// 	$user_id = Auth::id();

	// 	switch ($event) {

	// 	case 'created':
	// 	  $newValues = $model->toArray();
	// 	  break;

	// 	case 'updated':
	// 	  $oldValues = $model->getOriginal();
	// 	  $newValues = $model->toArray();
	// 	  break;

	// 	case 'deleted':
	// 	  $oldValues = $model->toArray();
	// 	  break;

	// 	}

	// 	self::create([
	// 		'model' => $model,
	// 		'user_id' => $user_id,
	// 		'model_id' => $model->getKey(),
	// 		'event' => $event, 
	// 		'old_values' => json_encode($oldValues),
	// 		'new_values' => json_encode($newValues),
	// 	]);

	// }
}
