<?php

namespace App\Models\Persons;

use Illuminate\Database\Eloquent\Model;

class Persons extends Model
{
  /**
  * The table associated with the model.
  *
  *
  */
  protected $table = 'personas';

  /**
  * Primary Key associated with the model.
  *
  *
  */

  protected $primaryKey = 'id_persona';

  protected $fillable = ['nombre', 'email'];

  public function tourist(){
    return $this->hasOne(Turist::class,'id_turista');
  }

  public function afilliate(){
    return $this->hasOne(Afilliate::class,'id_afiliado');
  }

  public function administrator(){
    return $this->hasOne(Administrator::class,'id_administrador');
  }
}
