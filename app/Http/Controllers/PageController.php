<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Halaman index
    public function index() {
        return view('user.index');
    }

    // Halaman catalog
    public function cataloglist() {
        return view('user.catalog-list');
    }
    public function cataloggallery() {
        return view('user.catalog-gallery');
    }
    public function catalogtable() {
        return view('user.catalog-table');
    }

    // Halaman compare
    public function compare() {
        return view('user.compare');
    }
}
