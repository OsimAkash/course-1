<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index() {
        $data= [];
   
    $this->data['name']='Osim Akash';
    $this->data [ 'roll']= '25';
    $this->data['subject'] =['Bangla', 'English','Math'];


    return view('home.index', $this->data);





    }        
}
