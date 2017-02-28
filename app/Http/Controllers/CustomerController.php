<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function index(){
        return view('contents/customer');
    }
}
