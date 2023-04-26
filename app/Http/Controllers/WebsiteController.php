<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\Katalog;
use App\Models\Desc;

class WebsiteController extends Controller
{   
    public function __construct() {
		
	}
    
    public function index(){
        $this->data["katalog"] = Katalog::get();
        return view('welcome', $this->data);
    }

    public function desc($desc){
        $getDesc = Desc::where('detailref',$desc);
        if($getDesc->count() > 0){
            return json_decode($getDesc->first());
        } else {
            dd($getDesc);      
        }        
    }
}
?>
