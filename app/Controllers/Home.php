<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        helper('url');
    }
    
    public function index(): string
    {
        //return view('welcome_message');
        return view('Plantilla/header').view('Vista').view('Plantilla/footer');
    }
}
