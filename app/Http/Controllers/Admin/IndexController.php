<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Room;
use App\Model\RoomType;
use App\Model\Utility;
use App\Model\User;
use App\Model\Contact;
use App\Model\Customer;

class IndexController extends Controller
{
	public function __construct(Room $mRoom, RoomType $mRoomType, Utility $mUtility, User $mUser, Contact $mContact, Customer $mCustomer){
		$this->mRoom = $mRoom;
		$this->mRoomType = $mRoomType;
		$this->mUtility = $mUtility;
		$this->mUser = $mUser;
        $this->mContact = $mContact;
		$this->mCustomer = $mCustomer;
	}

    public function index(){
    	$countRoom = $this->mRoom->getCount();
    	$countRoomType = $this->mRoomType->getCount();
    	$countUtility = $this->mUtility->getCount();
    	$countUser = $this->mUser->getCount();
        $countContact = $this->mContact->getCount(); 
    	$countCustomer = $this->mCustomer->getCount();

    	return view('admin.index.index', compact('countRoom', 'countRoomType', 'countUtility', 'countUser', 'countContact', 'countCustomer'));
    }
}
