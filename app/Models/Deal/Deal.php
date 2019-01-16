<?php

namespace App\Models\Deal;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
  /**
  * The table associated with the model.
  *
  *
  */
  protected $table = 'negocio';

  /**
  * Primary Key associated with the model.
  *
  *
  */

  protected $primaryKey = 'id_negocio';

  protected $fillable = ['id_negocio','nombre', 'direccion', 'telefono', 'email'];
}
