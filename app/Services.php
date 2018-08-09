<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
   protected $table='services';             
	
	protected $fillable = ['service_name','user_id'];  
	
	protected $hidden = [];

    public $timestamps = true;
}
