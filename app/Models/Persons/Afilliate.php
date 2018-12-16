<?php

namespace App\Models\Persons;

use Illuminate\Database\Eloquent\Model;

class Afilliate extends Model
{
  /**
  * The table associated with the model.
  *
  *
  */
  protected $table = 'afiliados';

  /**
  * Primary Key associated with the model.
  *
  *
  */

  protected $primaryKey = 'id_afiliado';

  protected $fillable = ['id_afiliado','direccion', 'edad','curriculum'];

  public function person(){
    return $this->belongsTo(Persons::class, 'id_afiliado');
  }
}
