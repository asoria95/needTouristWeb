<?php

namespace App\Models\Service;

use Illuminate\Database\Eloquent\Model;

class PackageTourist extends Model
{
  /**
* The table associated with the model.
*
*
*/
protected $table = 'paquete_turistico';

/**
* Primary Key associated with the model.
*
*
*/

protected $primaryKey = 'id_paquete';

protected $fillable = ['id_paquete','descripcion', 'itinerario','price'];

  public function service(){
    return $this->belongsTo(Service::class,'id_paquete');
  }

}
