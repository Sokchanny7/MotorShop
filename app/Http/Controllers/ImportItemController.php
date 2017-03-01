<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportItemController extends Controller
{
    public function index() {
        return view('contents/import_item');
    }
}
