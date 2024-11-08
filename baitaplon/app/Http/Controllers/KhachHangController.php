<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KhachHang;
use App\Models\DoanhThuKH;
class KhachHangController extends Controller
{
    public function index()
    {
        $khachhang = KhachHang::paginate(5);
        return view('khachhang.index', compact('khachhang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('khachhang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'TenKH' => 'required|string|max:255',
            'DienThoai' => 'required|digits:10',
            'DiaChi'=> 'required',

            // Thêm các trường khác nếu cần
        ]);

        KhachHang::create($request->all());
        return redirect()->route('khachhang.index')->with('success', 'Thêm khách hàng thành công');
    }

    public function edit($MaKH)
    {
        $khachhang = KhachHang::findOrFail($MaKH);
        return view('khachhang.edit', compact('khachhang'));
    }

    public function update(Request $request, $MaKH)
        {
            $request->validate([
                'TenKH' => 'nullable|string|max:255',
                'SoDienThoai' => 'nullable|digits:10',
                'DiaChi'=>'nullable|string|max:255',
            ]);

        $khachhang = KhachHang::findOrFail($MaKH);
        $khachhang->update($request->only(['TenKH', 'DienThoai', 'DiaChi']));
        return redirect()->route('khachhang.index')->with('success', 'Cập nhật khách hàng thành công');
        }  
  public function destroy(string $id)
    {
        $khachHang = KhachHang::findOrFail($id);
        $khachHang->delete();
    
        return redirect()->route('khachhang.index')->with('success', 'Khách hàng và các dữ liệu liên quan đã được xóa.');
    }
    
    public function doanhThu()
    {
        // Lấy dữ liệu từ view view_DoanhThuKH
        $doanhThuKH = DoanhThuKH::all();
        return view('khachhang.doanhthuKH', ['doanhThuKH' => $doanhThuKH]);
    }
}