<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NhanVien;
class NhanVienController extends Controller
{
    public function index()
    {
        $nhanvien = NhanVien::paginate(5);
        return view('nhanvien.index', compact('nhanvien'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("nhanvien.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'HoTenNV' => 'required|max:255',
            'GioiTinh' => 'required',
            'NgaySinh' => 'required|date',
            'DiaChi' => 'required',
            'DienThoai' => 'required',
        ]);

        Nhanvien::create($request->all());

        return redirect()->route('nhanvien.index')->with('success', 'Thêm nhân viên thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($MaNV)
    {
        $Nhanvien = NhanVien::find($MaNV);
        return view('nhanvien.edit', compact('Nhanvien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $MaNV)
    {
        $request->validate([
            'HoTenNV' => 'required|max:255',
            'GioiTinh' => 'required',
            'NgaySinh' => 'nullable|date',
            'DiaChi' => 'required',
            'DienThoai' => 'required',
            ]);
            $Nhanvien = NhanVien::find($MaNV);
            $Nhanvien->update($request->all());
            return redirect()->route('nhanvien.index')
            ->with('success', 'Cập nhật thông tin nhân viên thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($MaNV)
    {
        $Nhanvien = NhanVien::find($MaNV);
        $Nhanvien->delete();
        return redirect()->route('nhanvien.index')
        ->with('success', 'Xóa nhân viên thành công');
    }
}