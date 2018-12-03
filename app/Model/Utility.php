<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Utility extends Model
{
    protected $table = "utilities";
    protected $primaryKey = "uid";
    public $timestamps = false;

    public function getCount(){
        return $this->count();
    }

    public function addItem($arItem){

    	return $this->insert($arItem);
    }

    public function editItem($id, $arItem){

    	return $this->where('uid', '=', $id)->update($arItem);
    }

    public function deleteItem($id){

    	return $this->where('uid', '=', $id)->delete();
    }
}
