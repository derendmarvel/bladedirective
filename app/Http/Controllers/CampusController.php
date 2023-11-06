<?php

namespace App\Http\Controllers;

use App\Models\Campus;

use Illuminate\Http\Request;

class CampusController extends Controller {
    public static function index(){
        return view ('campuslist', [
            'campuses' => Campus::allData(),
            'activeCampus' => 'active'
        ]);
    }

    public static function show($id){
        return view ('campusdetail', [
            'campus' => Campus::dataWithCode($id)
        ]);
    }
}

?>