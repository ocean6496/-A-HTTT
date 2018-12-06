<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Model\Customer;
use App\Model\Room;

class CustomerController extends Controller
{
	public function __construct(Customer $mCustomer, Room $mRoom) {
        $this->mCustomer = $mCustomer;
		$this->mRoom = $mRoom;
	}

    public function index() {
    	$customers = $this->mCustomer->getItems();

    	return view('admin.customer.index', compact('customers'));
    }

    public function getAdd() {
        $rooms = $this->mRoom->getRoomEmpty(); 

        return view('admin.customer.add',compact('rooms'));
    }

    public function postAdd(CustomerRequest $request) {
        $room = $this->mRoom->find($request->rid);
        $check_out = date_create($request->check_out); 
        $check_in = date_create($request->check_in); 
        $countDate = date_diff($check_out, $check_in)->format('%a'); 
        $cost = $room->cost * $countDate;
        $arItems = array(
                    'firstname' => $request->firstname,
                    'lastname' => $request->lastname,
                    'idcard' => $request->idcard,
                    'phone' => $request->phone,
                    'rid' => $room->rname,
                    'check_in' => $request->check_in,
                    'check_out' => $request->check_out, 
                    'cost' => $cost,  
                ); 
        $resultAdd = $this->mCustomer->addItem($arItems);

        if ($resultAdd) {
            $request->session()->flash('msg','Thêm đặt phòng thành công!');
            return redirect()->route('admin.customer.index');
        } else {
            $request->session()->flash('msg','Có lỗi khi thêm đặt phòng!');
            return redirect()->route('admin.customer.index');
        }
    }

    public function getEdit($id) {
        $customer = $this->mCustomer->getItem($id);

        return  view('admin.customer.edit', compact('customer'));
    }

    public function postEdit($id, Request $request) {
        $room = $this->mRoom->findName($request->rid);
        $check_out = date_create($request->check_out); 
        $check_in = date_create($request->check_in); 
        $countDate = date_diff($check_out, $check_in)->format('%a'); 
        $cost = $room->cost * $countDate; 
        $arItems = array(
                    'idcard' => $request->idcard,
                    'phone' => $request->phone,
                    'rid' => $request->rid,
                    'check_in' => $request->check_in,
                    'check_out' => $request->check_out,
                    'cost' => $cost,
                );
        $resultEdit = $this->mCustomer->editItem($id, $arItems);

        if ($resultEdit) {
            $request->session()->flash('msg', 'Sửa đặt phòng thành công!');
            return redirect()->route('admin.customer.index'); 
        } else {
            $request->session()->flash('msg', 'Có lỗi khi sửa đặt phòng!');
            return redirect()->route('admin.customer.index');
        }
    }

    public function delete($id, Request $request) {
    	$resultDelete = $this->mCustomer->deleteItem($id);

        if ($resultDelete) {
            $request->session()->flash('msg', 'Xóa đặt phòng thành công!');
            return redirect()->route('admin.customer.index'); 
        } else {
            $request->session()->flash('msg', 'Có lỗi khi xóa đặt phòng!');
            return redirect()->route('admin.customer.index');
        }
    }
}
