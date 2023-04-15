<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class ContentController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function mainIndex(){
        $katalog = DB::select("select content, image, detailref from content_manager where section = 'katalog' ");
        return view('welcome', ['katalog' => $katalog ]);
    }


    public function desc($desc){
        $getDesc = DB::select("select content from content_manager where section = :desc ",['desc' => $desc]);
        return $getDesc[0];
    }
}
