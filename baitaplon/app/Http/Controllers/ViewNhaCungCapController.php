<?php

namespace App\Http\Controllers;
use App\Models\NhaCungCapView;
use Illuminate\Http\Request;

class ViewNhaCungCapController extends Controller
{
    public function index()
    {
        $viewnhacungcap = NhaCungCapView::all(); 
        return view('viewnhacungcap.index', compact('viewnhacungcap'));
    }
}