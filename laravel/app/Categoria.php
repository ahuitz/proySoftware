<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;



class Categoria extends Model 

{

    protected $table = 'categorias';
    protected $primaryKey = 'idcategoria';
    protected $guarded = ['idcategoria'];
  	protected $fillable = ['nombre'];
  	
  	 

}
