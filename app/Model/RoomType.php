<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RoomType extends Model
{
    protected $table = "room_type";
    protected $primaryKey = "type_id";
    public $timestamps = false;

    public function room(){
        return $this->hasMany(Room::class, 'rid');
    } 

    public function getCount(){
        return  $this->count();
    }

    public function getItems(){

    	return $this->orderBy('type_id', 'DESC')->paginate(5);
    }

    public function getItem($id){

    	return $this->findOrFail($id);
    }

    public function addItem($arItem){

    	return $this->insert($arItem);
    }

    public function editItem($id, $arItem){

    	return $this->where('type_id', '=', $id)->update($arItem);
    }

    public function deleteItem($id){

    	return $this->where('type_id', '=', $id)->delete();
    }
}
