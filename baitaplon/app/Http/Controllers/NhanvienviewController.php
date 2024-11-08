<?php

namespace App\Http\Controllers;

use App\Models\Nhanvienview; // Sử dụng model vừa tạo
use Illuminate\Http\Request;

class NhanvienviewController extends Controller
{
    public function index()
    {
        // Lấy dữ liệu từ view NhanVien_View và phân trang
        $nhanvien = Nhanvienview::paginate(10);
        
        // Trả về view nhanvienview.view
        return view('nhanvienview.view', compact('nhanvien'));
    }
}
