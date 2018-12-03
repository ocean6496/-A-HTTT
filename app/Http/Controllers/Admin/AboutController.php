<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\About;

class AboutController extends Controller
{
    public function __construct(About $mAbout) {
        $this->mAbout = $mAbout;
    }

    public function index(){
    	$abouts = About::orderBy('aid', 'DESC')->get();

    	return view('admin.about.index', compact('abouts'));
    }

    public function getAdd(){

    	return view('admin.about.add');
    }

    public function postAdd(Request $request){
        $arAbout = array(
                    'preview_text' => $request->mota,
                    'detail_text' => $request->chitiet,
                    'picture' => $request->hinhanh,
                    'active' => $request->active,
                ); 
        $resultAdd = $this->mAbout->addItem($arAbout);

        if ($resultAdd) {
            $request->session()->flash('msg', 'Thêm giới thiệu thành công!');
            return redirect()->route('admin.about.index');
        } else {
            $request->session()->flash('msg', 'Có lỗi khi thêm giới thiệu!');
            return redirect()->route('admin.about.index');
        }
    }

    public function getEdit($id){
        $objItem = $this->mAbout->find($id);

    	return view('admin.about.edit', compact('objItem'));
    }

    public function postEdit(Request $request, $id){
        $arAbout = array(
                    'preview_text' => $request->mota,
                    'detail_text' => $request->chitiet,
                    'active' => $request->active,
                ); 
    	$resultEdit = $this->mAbout->editItem($id, $arAbout);

        if ($resultEdit) {
            $request->session()->flash('msg', 'Sửa giới thiệu thành công!');
            return redirect()->route('admin.about.index');
        } else {
            $request->session()->flash('msg', 'Có lỗi khi sửa giới thiệu!');
            return redirect()->route('admin.about.index');
        }
    }

    public function delete(Request $request, $id){
        $resultDelete = $this->mAbout->deleteItem($id);

        if ($resultDelete) {
            $request->session()->flash('msg', 'Xóa giới thiệu thành công!');
            return redirect()->route('admin.contact.index');
        } else {
            $request->session()->flash('msg', 'Có lỗi khi xóa giới thiệu!');
            return redirect()->route('admin.contact.index');
        }
    }
}
