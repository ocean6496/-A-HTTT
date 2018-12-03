<?php

namespace App\Http\Controllers\Chotel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\About;

class AboutController extends Controller
{
	public function __construct(About $mAbout){
		$this->mAbout = $mAbout;
	}

    public function index(){
    	$objItem = $this->mAbout->getItem();

    	return view('chotel.about.index', compact('objItem'));
    }
}
