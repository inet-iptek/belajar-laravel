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
        $nama = "Reno";
        return "Nama Saya ".$nama;
    }
}
