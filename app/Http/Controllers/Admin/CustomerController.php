<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Model\Customer;

class CustomerController extends Controller
{
	public function __construct(Customer $mCustomer) {
		$this->mCustomer = $mCustomer;
	}

    public function index() {
    	$customers = $this->mCustomer->getItems();

    	return view('admin.customer.index', compact('customers'));
    }

    public function getAdd() {
        return view('admin.customer.add');
    }

    public function postAdd(CustomerRequest $request) {
        $arItems = array(
                    'firstname' => $request->firstname,
                    'lastname' => $request->lastname,
                    'idcard' => $request->idcard,
                    'phone' => $request->phone,
                    'rid' => $request->rid,
                    'check_in' => $request->check_in,
                    'check_out' => $request->check_out,   
                );
        $resultAdd = $this->mCustomer->addItem($arItems);

        if ($resultAdd) {
            $request->session()->flash('msg','Thêm khách hàng thành công!');
            return redirect()->route('admin.customer.index');
        } else {
            $request->session()->flash('msg','Có lỗi khi thêm khách hàng!');
            return redirect()->route('admin.customer.index');
        }
    }

    public function getEdit($id) {
        $customer = $this->mCustomer->getItem($id);

        return  view('admin.customer.edit', compact('customer'));
    }

    public function postEdit($id, Request $request) {
        $arItems = array(
                    'idcard' => $request->idcard,
                    'phone' => $request->phone,
                    'rid' => $request->rid,
                    'check_in' => $request->check_in,
                    'check_out' => $request->check_out,
                );
        $resultEdit = $this->mCustomer->editItem($id, $arItems);

        if ($resultEdit) {
            $request->session()->flash('msg', 'Sửa khách hàng thành công!');
            return redirect()->route('admin.customer.index'); 
        } else {
            $request->session()->flash('msg', 'Có lỗi khi sửa khách hàng!');
            return redirect()->route('admin.customer.index');
        }
    }

    public function delete($id, Request $request) {
    	$resultDelete = $this->mCustomer->deleteItem($id);

        if ($resultDelete) {
            $request->session()->flash('msg', 'Xóa khách hàng thành công!');
            return redirect()->route('admin.customer.index'); 
        } else {
            $request->session()->flash('msg', 'Có lỗi khi xóa khách hàng!');
            return redirect()->route('admin.customer.index');
        }
    }
}
