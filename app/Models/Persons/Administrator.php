<?php

namespace App\Models\Persons;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
  /**
  * The table associated with the model.
  *
  *
  */
  protected $table = 'administradores';

  /**
  * Primary Key associated with the model.
  *
  *
  */

  protected $primaryKey = 'id_administrador';

  public function person(){
    return $this->belongsTo(Persons::class, 'id_administrador');
  }
  
}
