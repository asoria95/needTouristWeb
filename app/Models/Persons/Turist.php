<?php

namespace App\Models\Persons;

use Illuminate\Database\Eloquent\Model;

class Turist extends Model
{
  /**
  * The table associated with the model.
  *
  *
  */
  protected $table = 'turistas';

  /**
  * Primary Key associated with the model.
  *
  *
  */

  protected $primaryKey = 'id_turista';

  protected $fillable = ['id_turista','idioma', 'residencia'];

  public function person(){
    return $this->belongsTo(Persons::class, 'id_turista');
  }
}
