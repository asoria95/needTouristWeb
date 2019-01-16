<?php

namespace App\Models\Service;

use Illuminate\Database\Eloquent\Model;

class ServiceTurist extends Model
{
  /**
  * The table associated with the model.
  *
  *
  */
  protected $table = 'servicio_turista';

  /**
  * Primary Key associated with the model.
  *
  *
  */
  protected $primaryKey = 'id_servicio';


  protected $fillable = ['id_servicio','id_turista', 'fecha','cantidad'];

  //protected $primaryKey = 'id_servicio';
}
