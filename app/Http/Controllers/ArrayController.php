<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayController extends Controller
{
    public function ShowArray(){
        $user = [
            'fname' => 'Janusz',
            'lname'=> 'Nowak',
            'city'=> 'Poznań',
            'hobby'=> ['żużel', 'siatkówka', 'skoki narciasrkie']
        ];
        return view('show_user',['user'=> $user]);
    }
}
