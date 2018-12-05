<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoomRequest;
use App\Model\Room;
use App\Model\RoomType;
use App\Model\Utility;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    public function __construct(Room $mRoom, RoomType $mRoomType, Utility $mUtility){
        $this->mRoom = $mRoom;
        $this->mRoomType = $mRoomType;
        $this->mUtility = $mUtility;
    }

    public function index(){
    	$rooms = $this->mRoom->getItems(); 

    	return view('admin.room.index', compact('rooms'));
    }

    public function getAdd(){
        $roomTypes = $this->mRoomType->all();
        $utilities = $this->mUtility->all();

    	return view('admin.room.add', compact('roomTypes', 'utilities'));
    }

    public function postAdd(RoomRequest $request){
        $hinhanh = '';
        if ($request->file('hinhanh') != null) {
            $path = $request->file('hinhanh')->store('files');
            $tmp = explode('/', $path);
            $hinhanh = end($tmp);
        }
        $arItem = array(
                    'rname' => $request->tenphong,
                    'type_id' => $request->loaiphong,
                    'uid' => $request->tienich,
                    'picture' => $hinhanh,
                    'description' => $request->mota,
                    'cost' => $request->cost,
                    'status' => $request->status,
                );
        $resultAdd = $this->mRoom->addItem($arItem);
        if ($resultAdd) {
            $request->session()->flash('msg', 'Thêm phòng thành công!');
            return redirect()->route('admin.room.index');
        } else {
            $request->session()->flash('msg', 'Có lỗi khi thêm phòng!');
            return redirect()->route('admin.room.index');
        }
    }

    public function getEdit($id){
        $objItem = $this->mRoom->findOrFail($id);
    	$roomTypes = $this->mRoomType->all();
        $utilities = $this->mUtility->all();

    	return view('admin.room.edit', compact('objItem', 'roomTypes', 'utilities'));
    }

    public function postEdit($id, Request $request){
        $objItem = $this->mRoom->where('rid', '=', $id)->first();
        $hinhanh = $objItem->picture;
    	if ($request->file('hinhanh') != null) {
            //delete image
            Storage::delete('files/'.$hinhanh);
            //add image
            $path = $request->file('hinhanh')->store('files');
            $tmp = explode('/', $path);
            $hinhanh = end($tmp);
        }
        $arItem = array(
                    'rname' => $request->tenphong,
                    'type_id' => $request->loaiphong,
                    'uid' => $request->tienich,
                    'picture' => $hinhanh,
                    'description' => $request->mota,
                    'cost' => $request->cost,
                    'status' => $request->status,
                );
        $resultEdit = $this->mRoom->editItem($id, $arItem);
        if ($resultEdit) {
            $request->session()->flash('msg', 'Sửa phòng thành công!');
            return redirect()->route('admin.room.index');
        } else {
            $request->session()->flash('msg', 'Có lỗi khi sửa phòng!');
            return redirect()->route('admin.room.index');
        }
    }

    public function delete($id, Request $request){
        $item = $this->mRoom->getItem($id);
        $picture = $item->picture;
        if ($picture != '') {
            Storage::delete('files/'.$picture);
        }
  	    $resultDelete = $this->mRoom->deleteItem($id);
        if ($resultDelete) {
            $request->session()->flash('msg', 'Xóa phòng thành công!');
            return redirect()->route('admin.room.index');
        } else {
            $request->session()->flash('msg', 'Có lỗi khi xóa phòng!');
            return redirect()->route('admin.room.index');
        }
    }
}
