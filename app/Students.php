<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model {

	protected $table='students'; 
		
	protected $fillable= ['school_id','firstname','lastname','middlename','password'];


}
