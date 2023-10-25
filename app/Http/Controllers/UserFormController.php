<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFormController extends Controller
{
    public function showUser(Request $req){
        //return $req->input(key: 'fname');Janusz
        //return $req -> url(); http://127.0.0.1:8000/UserFormController
        //return $req->path();UserFormController
        //return $req->method(); GET
        //return $req->all();{"fname":"Janusz","lname":"Nowak"}
    
    $dataUser =[
        'fname' => $req->input('fname'),
        'lname' => $req->input('lname')];
    return view('user', $dataUser);
    }
}