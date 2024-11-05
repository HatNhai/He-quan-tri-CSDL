<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use App\Models\ChiTietHoaDon;
use Illuminate\Http\Request;

class HoaDonController extends Controller
{
    // Phương thức hiển thị danh sách hóa đơn
    public function index()
    {
        $hoaDons = HoaDon::all();
        return view('hoaDon.index', compact('hoaDons'));
    }

    // Phương thức xem chi tiết hóa đơn
    public function show($id)
    {
        $hoaDon = HoaDon::findOrFail($id);
        $chiTietHoaDons = ChiTietHoaDon::where('MaHD_FK', $hoaDon->MaHD)->get();
        
        return view('hoaDon.show', compact('hoaDon', 'chiTietHoaDons'));
    }
}
