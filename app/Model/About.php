<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = "aboutus";
    protected $primaryKey = "aid";
    public $timestamps = false;

    protected $fillable = [
    	'preview_text' , 'detail_text', 'active'
    ];

    public function getItem(){

    	return $this->first();
    }

    public function addItem($arItem){

    	return $this->insert($arItem);
    }

    public function editItem($id, $arItem){

    	return $this->where('aid', '=', $id)->update($arItem);
    }

    public function deleteItem($id){

    	return $this->where('aid', '=', $id)->delete();
    }
}
