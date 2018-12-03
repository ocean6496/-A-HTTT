<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Contact;

class ContactController extends Controller
{
    public function __construct(Contact $mContact){
        $this->mContact = $mContact;
    }

    public function index(){
    	$contacts = $this->mContact->getItems();

    	return view('admin.contact.index', compact('contacts'));
    }

    public function delete($id,Request $request){
    	$resultDelete = $this->mContact->deleteItem($id);

    	if ($resultDelete) {
    		$request->session()->flash('msg', 'Xóa liên hệ thành công!');
    		return redirect()->route('admin.contact.index');
    	} else {
    		$request->session()->flash('msg', 'Có lỗi khi xóa liên hệ!');
    		return redirect()->route('admin.contact.index');
    	}
    }
}
