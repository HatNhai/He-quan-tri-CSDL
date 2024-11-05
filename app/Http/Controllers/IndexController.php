<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }

    public function Trangchu()
    {
        return view('Trangchu');
    }

    public function Trangchuql(){
        return view('Trangchuql');
    }

}
