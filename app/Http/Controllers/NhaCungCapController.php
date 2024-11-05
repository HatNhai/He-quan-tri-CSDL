<?php

namespace App\Http\Controllers;

use App\Models\NhaCungCap;
use Illuminate\Http\Request;

class NhaCungCapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nhacungcap = NhaCungCap::paginate(5); 
        return view('nhacungcap.index', compact('nhacungcap'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nhacungcap.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate dữ liệu
        $ValidateData =  $request->validate([
            'TenNCC' => 'required|max:100',
            'DiaChi' => 'required|max:200',
            'SoDienThoai' => 'required|max:20',
            'email' => 'required|email|max:100',
            'TenNguoiLienHe' => 'required|max:100',
            'GhiChu' => 'nullable',
        ]);

        
        // Tạo NCC mới
       NhaCungCap::create($ValidateData);

        // Chuyển hướng về trang danh sách NCC với thông báo
        return redirect()->route('nhacungcap.index')->with('success', 'Nhà cung cấp được thêm thành công!');
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
    public function edit(NhaCungCap $nhacungcap)
    {
        return view('nhacungcap.edit', compact('nhacungcap'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NhaCungCap $nhacungcap)
    {
        $ValidateData =  $request->validate([
            'TenNCC' => 'required|max:100',
            'DiaChi' => 'required|max:200',
            'SoDienThoai' => 'required|max:20',
            'email' => 'required|email|max:100',
            'TenNguoiLienHe' => 'required|max:100',
            'GhiChu' => 'nullable',
        ]);
        
        // Cập nhật thông tin
        $nhacungcap->update($ValidateData);
    
        // Điều hướng trở lại trang index với thông báo thành công
        return redirect()->route('nhacungcap.index')->with('success', 'Nhà cung cấp đã được cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NhaCungCap $nhacungcap)
    {
        $nhacungcap->delete();

        return redirect()->route('nhacungcap.index')->with('success', 'Nhà cung cấp đã được xóa thành công');
    }
}