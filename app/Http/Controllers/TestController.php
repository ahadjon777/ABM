<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function front()
    {
        return view('admin.master.main');
    }
}
