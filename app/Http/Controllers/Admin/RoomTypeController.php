<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoomTypeRequest;
use App\Model\RoomType;
use App\Model\Room;
use Illuminate\Support\Facades\Storage;

class RoomTypeController extends Controller
{
    public function __construct(Room $mRoom, RoomType $mRoomType){
        $this->mRoom = $mRoom;
        $this->mRoomType = $mRoomType;
    }

    public function index(){
    	$roomTypes = $this->mRoomType->getItems(); 
        
    	return view('admin.roomType.index', compact('roomTypes'));
    }

    public function test(){
        $test = $this->mRoomType->room(); 
        dd($test);
    }

    public function getAdd(){

    	return view('admin.roomType.add');
    }

    public function postAdd(RoomTypeRequest $request){
        $arItem = array(
                        'tname' => $request->tname,
                    );
        $resultAdd = $this->mRoomType->addItem($arItem);
        if ($resultAdd) {
            $request->session()->flash('msg', 'Thêm loại phòng thành công!');
            return redirect()->route('admin.roomType.index');
        } else {
            $request->session()->flash('msg', 'Có lỗi khi thêm loại phòng!');
            return redirect()->route('admin.roomType.index');
        }
    }

    public function getEdit($id){
    	$roomType = $this->mRoomType->getItem($id);

    	return view('admin.roomType.edit', compact('roomType'));
    }

    public function postEdit($id, Request $request){
        $arItem = array(
                        'tname' => $request->tname,
                    );
        $resultEdit = $this->mRoomType->editItem($id, $arItem);

        if ($resultEdit) {
            $request->session()->flash('msg', 'Sửa loại phòng thành công!');
            return redirect()->route('admin.roomType.index');
        } else {
            $request->session()->flash('msg', 'Có lỗi khi sửa loại phòng!');
            return redirect()->route('admin.roomType.index');
        }         
    }

    public function delete($id, Request $request){
        $rooms = $this->mRoom->getItemsByRoomType($id);
        foreach ($rooms as $room) {
            $picture = $room->picture;
            if ($picture != '') {
                Storage::delete('files/'.$picture);
            }
            $this->mRoom->deleteItem($room->rid);
        }

        $resultDelete = $this->mRoomType->deleteItem($id);

        if ($resultDelete) {
            $request->session()->flash('msg', 'Xóa loại phòng thành công!');
            return redirect()->route('admin.roomType.index');
        } else {
            $request->session()->flash('msg', 'Có lỗi khi xóa loại phòng!');
            return redirect()->route('admin.roomType.index');
        }        
    }
}
