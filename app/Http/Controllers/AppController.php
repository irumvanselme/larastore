<?php

namespace App\Http\Controllers;

class AppController extends Controller
{
    public function index(){
        return view("pages.admin.index");
    }


    public function analytics(){
        return view("pages.admin.analytics.index");
    }
}
