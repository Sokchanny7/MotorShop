<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellItemController extends Controller
{
    public function index() {
        return view('contents/sell_item');
    }
}
