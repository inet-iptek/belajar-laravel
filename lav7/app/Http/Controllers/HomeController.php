<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        return "Hello World : ";
    }

    public function about($nama) {
        return "Nama Saya ".$nama;
    }
}
