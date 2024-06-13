<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pengguna extends Controller
{
    public function index()
    {
        return view('dashboard.pengguna.index');
    }
}
