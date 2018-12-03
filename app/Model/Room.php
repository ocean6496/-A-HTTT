<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Room extends Model
{
    protected $table = "rooms";
    protected $primaryKey = "rid";
    public $timestamps = false;

    public function getCount(){
        return $this->count();
    }

    public function getItems(){
    	return DB::table('rooms as r')
                    ->leftJoin('room_type as rt', 'r.type_id', '=', 'rt.type_id')
                    ->leftJoin('utilities as ut', 'r.uid', '=', 'ut.uid')
                    ->orderBy('rid', 'DESC')->paginate(4);
    }

    public function getItem($id){

        return $this->findOrFail($id);
    }

    public function getItemsByRoomType($id){

        return $this->where('type_id', '=', $id)->get();
    }

    public function relateItems($id){
        $item = $this->findOrFail($id);

        return $this->where('type_id', '=', $item->type_id)->where('rid', '!=', $id)->orderBy('rid', 'DESC')->paginate(2);
    }

    public function catItems($id){

        return DB::table('rooms as r')
                    ->join('room_type as rt', 'r.type_id', '=', 'rt.type_id')
                    ->join('utilities as ut', 'r.uid', '=', 'ut.uid')
                    ->where('r.type_id', '=', $id)
                    ->orderBy('rid', 'DESC')->paginate(4);
    }

    public function addItem($arItem){

    	return $this->insert($arItem);
    }

    public function editItem($id, $arItem){

    	return $this->where('rid', '=', $id)->update($arItem);
    }

    public function deleteItem($id){

    	return $this->where('rid', '=', $id)->delete();
    }
    
}
