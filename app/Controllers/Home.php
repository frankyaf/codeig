<?php

namespace App\Controllers;
use App\Models\ContenidoModel;

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

    public function show($id = null){
        $list['id']= $id;
        return view('Plantilla/header').view('VistaCompleta',$list).view('Plantilla/footer');
    }
}
