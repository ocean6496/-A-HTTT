<?php

namespace App\Http\Controllers\Chotel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BookRoomRequest;
use App\Model\RoomType;
use App\Model\Room;
use App\Model\Utility;
use App\Model\Customer;

class RoomController extends Controller
{
    public function __construct(Room $mRoom, Customer $mCustomer){
        $this->mRoom = $mRoom;
        $this->mCustomer = $mCustomer;
    }

	public function index(){
		$objItems = $this->mRoom->getItems();

        return view('chotel.room.index', compact('objItems'));
	}

    public function cat($slug, $cid){
    	$cat = RoomType::find($cid);
    	$objItems = $this->mRoom->catItems($cid);

    	return view('chotel.room.cat', compact('cat', 'objItems'));
    }

    public function detail($slug, $id){
    	$objItem = $this->mRoom->getItem($id);
    	$utility = Utility::find($objItem->uid);
    	$relateItems = $this->mRoom->relateItems($id);

    	return view('chotel.room.detail', compact('objItem', 'utility', 'relateItems'));
    }

    public function getBook($id){
        return view('chotel.room.book', compact('id'));
    }

    public function postBook(BookRoomRequest $request, $id){
        $room = $this->mRoom->find($id); 
        $nameBook = $room->rname; 
        $this->mRoom->editStatus($id);
        $check_out = date_create($request->check_out); 
        $check_in = date_create($request->check_in); 
        $countDate = date_diff($check_out, $check_in)->format('%a'); 
        $cost = $room->cost * $countDate; 
        $arItems = array(
                        'firstname' => $request->firstname,
                        'lastname' => $request->lastname,
                        'idcard' => $request->idcard,
                        'phone' => $request->phone,
                        'check_in' => $request->check_in,
                        'check_out' => $request->check_out,
                        'cost' => $cost,
                        'rid' => $nameBook,
                    ); 
        $resultAdd = $this->mCustomer->addItem($arItems);
        // $test = $this->mCustomer->getNew(); dd($test);
        // $customer_id = $test->customer_id; dd($customer_id);
        // $this->mRoom->editStatus($id, $customer_id);
        if ($resultAdd) {
            $request->session()->flash('msg', 'Book congragulation!');
            return redirect()->route('chotel.room.book', $id);
        } else {

        }
    }
}
