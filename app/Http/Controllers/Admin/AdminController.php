<?php

namespace sgcom\Http\Controllers\Admin;

use Illuminate\Http\Request;
use sgcom\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.home.index');
    }
}
