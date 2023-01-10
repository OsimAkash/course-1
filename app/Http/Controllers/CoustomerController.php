<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoustomerController extends Controller
{
    public function index() {
        // $coustomers= DB::table('coustomers')->get();
        // $coustomers= DB::table('coustomers')
        // ->select('id', 'email  as coustomer_email')
        // ->where('votes', '150')
        // ->first();

        // echo $coustomers->coustomer_email;

        //->>>>>>Join<<<<<<--\\\\ 
        $coustomers = DB::table('coustomers') 
        ->select('coustomers.email', 'invoices.amount')
        ->leftJoin('invoices', 'coustomers.id', '=' , 'invoices.coustomers_id')
        ->get();

        dd($coustomers);


    }
}
