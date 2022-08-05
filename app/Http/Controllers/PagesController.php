<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('pages.index');
    }
    public function admin(){
        return view('pages.admin-dashboard');
    }
    public function services(){
        return view('pages.services');
    }
    public function portfolio(){
        return view('pages.portfolio');
    }
    public function about(){
        return view('pages.about');
    }
    public function contact(){
        return view('pages.contact');
    }
}
