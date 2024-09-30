<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function GotoAdminpanel()
    {
        return view('admin');
    }

    public function GotoAdminLogin()
{
    return view('admin');
}


}


