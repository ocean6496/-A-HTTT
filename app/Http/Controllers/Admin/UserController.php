<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserRequest;
use App\Model\User;
use App\Model\Role;

class UserController extends Controller
{
    public function __construct(User $mUser,Role $mRole){
        $this->mUser = $mUser;
        $this->mRole = $mRole;
    }

    public function index(){
    	$users = $this->mUser->getItems();

    	return view('admin.user.index', compact('users'));
    }

    public function getAdd(){
        $roles = $this->mRole->getAll();

    	return view('admin.user.add', compact('roles'));
    }

    public function postAdd(UserRequest $request){
        $arItem = array(
                    'username' => trim($request->username),
                    'password' => bcrypt(trim($request->password)),
                    'fullname' => $request->fullname,
                    'role_id' => $request->role_id,
                );
        $resultAdd = $this->mUser->addItem($arItem);
        if ($resultAdd) {
            $request->session()->flash('msg', 'Thêm người dùng thành công!');
            return redirect()->route('admin.user.index');
        } else {
            $request->session()->flash('msg', 'Có lỗi khi thêm người dùng!');
            return redirect()->route('admin.user.index');
        }

    }

    public function getEdit($id, Request $request){
    	$user = User::find($id);
        $role = Role::find($user->role_id);
        if (Auth::user()->username != $user->username && Auth::user()->username != 'admin') {
            $request->session()->flash('msg', 'Bạn không được sửa thông tin của người khác!');
            return redirect()->route('admin.user.index');
        }

    	return view('admin.user.edit', compact('user', 'role'));
    }

    public function postEdit($id, Request $request){
        if ($request->password != '') {
            $arItem['password'] = bcrypt(trim($request->password));
        }
    	$arItem['fullname'] = $request->fullname;
        
        $resultEdit = $this->mUser->editItem($id, $arItem);
        if ($resultEdit) {
            $request->session()->flash('msg', 'Sửa người dùng thành công!');
            return redirect()->route('admin.user.index');
        } else {
            $request->session()->flash('msg', 'Có lỗi khi sửa người dùng!');
            return redirect()->route('admin.user.index');
        }
    }

    public function delete($id, Request $request){
         $resultDelete = $this->mUser->deleteItem($id);
        if ($resultDelete) {
            $request->session()->flash('msg', 'Xóa người dùng thành công!');
            return redirect()->route('admin.user.index');
        } else {
            $request->session()->flash('msg', 'Có lỗi khi xóa người dùng!');
            return redirect()->route('admin.user.index');
        }
    }
}
