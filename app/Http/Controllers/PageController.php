<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Halaman index
    public function index() {
        $data = [
            'active'        => 'home',
        ];

        return view('user.index', $data);
    }

    // Halaman catalog
    public function cataloglist() {
        $data = [
            'active'        => 'catalog-list',
        ];

        return view('user.catalog-list', $data);
    }
    public function cataloggallery() {
        $data = [
            'active'        => 'catalog-gallery',
        ];

        return view('user.catalog-gallery', $data);
    }
    public function catalogtable() {
        $data = [
            'active'        => 'catalog-table',
        ];

        return view('user.catalog-table', $table);
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
    public function blog2() {
        return view('user.blog2');
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
    public function product2() {
        return view('user.product-2');
    }

    // Halaman wishlist
    public function wishlist() {
        return view('user.wishlist');
    }

    // Halaman login
    public function login() {
        return view('user.login');
    }
}
