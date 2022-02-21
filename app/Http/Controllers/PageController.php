<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo "Selamat Datang";
    }
    public function about(){
        echo "Shintya Rahmawati--2041720088";
    }
    public function articles($id){
        echo "Halaman artikel dengan ID : ".$id;
    }

}
