<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function index()
    {
        $data['title'] = 'Admin Home';
        return view('admin.mainContent', $data);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('index');
    }




}
