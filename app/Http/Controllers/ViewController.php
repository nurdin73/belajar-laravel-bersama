<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function view1(Request $request)
    {
        return $request->param;
    }

    public function post($id)
    {
        return $id;
    }
}
