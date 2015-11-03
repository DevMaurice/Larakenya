<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
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
   	public function users(){

   		return $this->hasMany(User::class);
   	}

   

}
