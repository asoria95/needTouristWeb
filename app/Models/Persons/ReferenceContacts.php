<?php

namespace App\Models\Persons;

use Illuminate\Database\Eloquent\Model;

class ReferenceContacts extends Model
{
  /**
  * The table associated with the model.
  *
  *
  */
  protected $table = 'contacto_referencia';

  /**
  * Primary Key associated with the model.
  *
  *
  */

  protected $primaryKey = 'id_rol';
}
