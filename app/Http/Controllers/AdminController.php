<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\Katalog;
use App\Models\Desc;

class AdminController extends Controller
{   
    public function __construct() {
		
	}
    
    public function index(){
        $this->data["katalog"] = Katalog::get();
        return view('welcome', $this->data);
    }

}
