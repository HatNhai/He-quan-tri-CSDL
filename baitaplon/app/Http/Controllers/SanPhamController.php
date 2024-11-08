<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sanphams = SanPham::paginate(5);
        return view('sanpham.index', compact('sanphams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sanpham.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'TenSP' => 'required',
            'LoaiSP' => 'required',
            'HinhThucDongGoi' => 'required',
            'GiaSP' => 'required',
            'SoLuongTonKho' => 'required',
        ]);

        SanPham::create($request->all());

        return redirect()->route('sanpham.index')->with('success', 'Thêm mới thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(SanPham $sanPham)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SanPham $sanPham)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SanPham $sanPham)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SanPham $sanPham)
    {
        //
    }
}
