<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Halaman index
    public function index() {
        return view('user.index');
    }

    // Halaman catalog-list
    public function cataloglist() {
        return view('user.catalog-list');
    }
}
