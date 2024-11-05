<?php

namespace App\Http\Controllers;

use App\Models\ThongKeDoanhThuSanPham;

class ThongKeDoanhThuSanPhamController extends Controller
{
    public function index()
    {
        $doanhThuSanPham = ThongKeDoanhThuSanPham::paginate(5);
        return view('doanhthu.index', compact('doanhThuSanPham'));
    }
}

