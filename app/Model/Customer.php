<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customer";
    protected $primaryKey = "customer_id";
    public $timestamps = false;

    public function getCount() {
    	return $this->count();
    }

    public function getItem($id) {
    	return $this->findOrFail($id);
    }

    public function getItems() {
    	return $this->orderBy('customer_id', 'DESC')->paginate(6);
    }

    public function addItem($arItems) {
    	return $this->insert($arItems);
    }

    public function editItem($id, $arItems) {
    	return $this->where('customer_id', '=', $id)->update($arItems);
    }

    public function deleteItem($id) {
    	return $this->where('customer_id', '=', $id)->delete();
    }
}
