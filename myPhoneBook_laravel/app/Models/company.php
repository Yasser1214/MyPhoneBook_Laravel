<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'companies';
    protected $fillable = [
    	'name', 'street', 'city', 'zip_code', 'phone_number', 'email'
    ];
    
    public function employee()
    {
	   return $this->hasMany('App\Models\employee');
    }
}
