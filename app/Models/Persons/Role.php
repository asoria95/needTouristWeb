<?php

namespace App\Models\Persons;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Role extends Model
{
  /**
  * The table associated with the model.
  *
  *
  */
  protected $table = 'rol';

  /**
  * Primary Key associated with the model.
  *
  *
  */

  protected $primaryKey = 'id_rol';

  protected $fillable = ['id_rol','nombre', 'descripcion'];

  public function userRole(){
    return $this->hasOne(usersRole::class,'id');
  }
}
