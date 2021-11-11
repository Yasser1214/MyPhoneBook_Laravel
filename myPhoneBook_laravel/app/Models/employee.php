<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'employees';
    protected $fillable = [
    	'civility', 'name', 'firstname', 'street', 'city', 'zip_code', 'phone_numner', 'email', 'company'
    ];
    
    public function company()
    {
        return $this->belongsTo('App\Models\company');
    }
}
