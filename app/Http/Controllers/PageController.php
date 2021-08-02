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
    // Halaman catalog-gallery
    public function cataloggallery() {
        return view('user.catalog-gallery');
    }
    // Halaman catalog-table
    public function catalogtable() {
        return view('user.catalog-table');
    }
}
