<?php

namespace App\Models\Persons;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Administrator extends Authenticatable
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
