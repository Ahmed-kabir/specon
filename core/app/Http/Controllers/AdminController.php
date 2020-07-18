<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        $data['title'] = 'Admin Home';
        return view('admin.mainContent', $data);
    }




}
