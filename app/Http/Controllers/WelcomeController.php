<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello(){
        return 'Hello world';
    }

    public function about(){
        return "Nama : Rizky Pratama Yudha NIM 2241760020";
    }
    public function index(){
        return "Selamat Datang";
    }

    public function articles($id){
        return "Halaman Article : " .$id;
    }
    
}
