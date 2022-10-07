<?php

namespace App\Controllers;

class Main extends BaseController
{
    public function index()
    {
        return view('pages/index');
    }
    public function aboutus()
    {
        echo ("testing");
    }
    public function login()
    {
        return view('pages/login');
    }
    public function daftar()
    {
        return view('pages/daftar');
    }
}
