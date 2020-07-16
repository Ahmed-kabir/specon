<?php

namespace App\Http\Controllers\admin;

use App\Admin;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('admin.home');
    }


}
