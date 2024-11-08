<?php

namespace App\Http\Controllers;
use App\Models\HoaDon;
use App\Models\ChiTietHoaDon;
use Illuminate\Http\Request;

class ChiTietHoaDonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chitiethoadons = ChiTietHoaDon::with('hoadon')->paginate(10);
        return view('chitiethoadon.index', compact('chitiethoadons')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ChiTietHoaDon $chiTietHoaDon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ChiTietHoaDon $chiTietHoaDon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ChiTietHoaDon $chiTietHoaDon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ChiTietHoaDon $chiTietHoaDon)
    {
        //
    }
}
