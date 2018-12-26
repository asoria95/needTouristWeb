<?php

namespace App\Models\Persons;

use Illuminate\Database\Eloquent\Model;

class Phones extends Model
{
  /**
  * The table associated with the model.
  *
  *
  */
  protected $table = 'telefonos';

  /**
  * Primary Key associated with the model.
  *
  *
  */

  protected $primaryKey = ['id_persona','telefono'];

  protected $fillable = ['id_persona','telefono'];

  public function person(){
    return $this->belongsTo(Persons::class, 'id_persona');
  }

}
