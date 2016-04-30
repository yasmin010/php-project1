<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Adress extends Authenticatable
{
  protected $table = 'adress';


    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */


    public function user(){
        return $this->belongTo('User');
    }
    
}
