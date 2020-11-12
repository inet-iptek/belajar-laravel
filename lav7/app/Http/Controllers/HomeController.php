<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data['title'] = "Home";
        $data['nama'] = "Arhi";

        return view('index', $data);
    }

    public function about() {
        $data['title'] = "About";
        $data['nama'] = "Arhi";
        return view('about', $data);
    }
}
