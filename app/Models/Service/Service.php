<?php

namespace App\Models\Service;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  /**
  * The table associated with the model.
  *
  *
  */
  protected $table = 'servicio';

  /**
  * Primary Key associated with the model.
  *
  *
  */
//protected $primaryKey = 'id_servicio';
  protected $primaryKey = 'id_paquete';


  public function package(){
    return $this->hasOne(PackageTourist::class,'id_paquete');
  }

}
