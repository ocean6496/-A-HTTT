<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "roles";
    protected $primaryKey = "role_id";
    public $timestamps = false;

    public function getAll() 
    {
    	return $this->orderBy('role_id', 'DESC')->get();
    }
}
