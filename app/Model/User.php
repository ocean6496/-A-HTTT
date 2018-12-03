<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public $timestamps = false;
    public $remember_token = null;

    public function getCount(){
        return $this->count();
    }

    public function getItems(){

        return $this->orderBy('id', 'DESC')->get();
    }

    public function addItem($arItem){

        return $this->insert($arItem);
    }

    public function editItem($id, $arItem){

        return $this->where('id', '=', $id)->update($arItem);
    }

    public function deleteItem($id){

        return $this->where('id', '=', $id)->delete();
    }
}
