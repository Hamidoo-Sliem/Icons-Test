<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leadsrc extends Model
{
     protected $table='leadsrc';             
	
	protected $fillable = ['name'];  
	
	protected $hidden = [];

    public $timestamps = true;
}
