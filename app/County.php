<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{	

	/**
     *Mass assignable attributes
     * 
     * @var array
     */
	protected $fillable=['name'];

	 /**
     * Returns members of the county
     *
     * @return App\User::class
     */
   	public function users{

   		return $this->hasMany(User::class);
   	}
}
