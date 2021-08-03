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

    // Halaman cart
    public function cart() {
        return view('user.cart');
    }

    // Halaman blog
    public function blog() {
        return view('user.blog');
    }

    // Halaman contact
    public function contact() {
        return view('user.contact');
    }

    // Halaman element
    public function element() {
        return view('user.element');
    }

    // Halaman post
    public function post() {
        return view('user.post');
    }

    // Halaman product
    public function product() {
        return view('user.product');
    }
}
