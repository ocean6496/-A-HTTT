<?php

namespace App\Http\Controllers\Chotel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __construct(Contact $mContact){
        $this->mContact = $mContact;
    }

    public function getIndex(){

    	return view('chotel.contact.index');
    }

    public function postAdd(ContactRequest $request){
    	$arItem = array(
    					'fullname' => $request->fullname,
    					'email' => $request->email,
    					'subject' => $request->subject,
    					'content' => $request->content,
    				);
        $result = Mail::send('mail.index', $arItem, function($message){
            $message->to('ocean06041996@gmail.com')->subject('Test Send Mail!');
        });

        $resultAdd = $this->mContact->addItem($arItem);
    	if ($resultAdd) {
    		$request->session()->flash('msg', 'Gửi liên hệ thành công!');
    		return redirect()->route('chotel.contact.index');
    	} else {
            $request->session()->flash('msg', 'Có lỗi khi gửi liên hệ!');
            return redirect()->route('chotel.contact.index');
        }

    }
}
