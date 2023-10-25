<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show(){
        return 'kontroler ShowController';

    }
    public function ShowData(){
        $data =[
            'fname'=>'janusz',
            'lname'=> 'nowak',
            'city'=> 'poznań'
        ];
        return view('data', $data);

    }
}
