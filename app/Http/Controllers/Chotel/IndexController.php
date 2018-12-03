<?php

namespace App\Http\Controllers\Chotel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Room;

class IndexController extends Controller
{
	public function __construct(Room $mRoom){
		$this->mRoom = $mRoom;
	}
     public function index(){
    	$objItems = $this->mRoom->getItems();

    	return view('chotel.index.index', compact('objItems'));
    }
}
