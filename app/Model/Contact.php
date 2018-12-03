<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = "vnecontact";
    protected $primaryKey = "cid";
    public $timestamps = false;

    public function getCount(){
        return $this->count();
    }

    public function getItems(){

    	return $this->orderBy('cid', 'DESC')->paginate(5);
    }

    public function addItem($arItem){

    	return $this->insert($arItem);
    }

    public function deleteItem($id){

    	return $this->where('cid', '=', $id)->delete();
    }

}
