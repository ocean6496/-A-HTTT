<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UtilityRequest;
use App\Model\Utility;

class UtilityController extends Controller
{
    public function __construct(Utility $mUtility){
        $this->mUtility = $mUtility;
    }

    public function index(){
    	$utilities = Utility::orderBy('uid', 'DESC')->paginate(5);

    	return view('admin.utility.index', compact('utilities'));
    }

    public function getAdd(){

    	return view('admin.utility.add');
    }

    public function postAdd(UtilityRequest $request){
        $arItem = array(
                    'uname' => $request->uname,
                );
        $resultAdd = $this->mUtility->addItem($arItem);
        if ($resultAdd) {
            $request->session()->flash('msg', 'Thêm tiện ích thành công!');
            return redirect()->route('admin.utility.index');
        } else {
            $request->session()->flash('msg', 'Có lỗi khi thêm tiện ích!');
            return redirect()->route('admin.utility.index');
        }
    }

    public function getEdit($id){
        $objItem = $this->mUtility->findOrFail($id);

    	return view('admin.utility.edit', compact('objItem'));
    }

    public function postEdit($id, Request $request){
        $arItem = array(
                    'uname' => $request->uname,
                );
        $resultEdit = $this->mUtility->editItem($id, $arItem);
        if ($resultEdit) {
            $request->session()->flash('msg', 'Sửa tiện ích thành công!');
            return redirect()->route('admin.utility.index');
        } else {
            $request->session()->flash('msg', 'Có lỗi khi sửa tiện ích!');
            return redirect()->route('admin.utility.index');
        }
    }

    public function delete($id, Request $request){
        $resultDelete = $this->mUtility->deleteItem($id);
        if ($resultDelete) {
            $request->session()->flash('msg', 'Xóa tiện ích thành công!');
            return redirect()->route('admin.utility.index');
        } else {
            $request->session()->flash('msg', 'Có lỗi khi xóa tiện ích!');
            return redirect()->route('admin.utility.index');
        }
    }
}
