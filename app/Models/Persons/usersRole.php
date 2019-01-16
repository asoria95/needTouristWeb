<?php

namespace App\Models\Persons;

use Illuminate\Database\Eloquent\Model;
use App\User;
class usersRole extends Model
{
  /**
  * The table associated with the model.
  *
  *
  */
    protected $table = 'users_rol';

    /**
    * Primary Key associated with the model.
    *
    *
    */

    protected $primaryKey = 'id_rol';
    protected $fillable = ['id_usuario','id_rol'];


    public function role(){
      return $this->hasOne(Role::class,'id_rol');
    }

    public function user(){
      return $this->hasOne(User::class,'id_usuario');
    }
}
