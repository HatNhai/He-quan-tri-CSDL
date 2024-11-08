<?php

namespace App\Http\Controllers;

use App\Models\PhieuNhap;
use App\Models\ChiTietPhieuNhap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PhieuNhapController extends Controller
{
    public function index()
    {
        $phieuNhaps = PhieuNhap::all();
        return view('phieunhap.index', compact('phieuNhaps'));
    }
    // Hiển thị form tạo phiếu nhập
    public function create()
    {
        return view('phieunhap.create');
    }
    public function updateProductsAfterImport($maNH)
    {
    
        if ($maNH) {
            $result = DB::select('CALL CapNhatSanPham (?)', [$maNH]);

            if ($result) {
                return response()->json(['message' => 'Cập nhật sản phẩm thành công'], 200);
            } else {
                return response()->json(['message' => 'Cập nhật sản phẩm thất bại'], 500);
            }
        } else {
            return response()->json(['message' => 'Mã phiếu nhập không tồn tại'], 400);
        }
    }

    public function store(Request $request)
    {
    $request->validate([
        'NgayNhap' => 'required|date',
        'MaNV_FK' => 'required|exists:nhanvien,MaNV',
        'MaNCC_FK' => 'required|exists:nhacungcap,MaNCC',
        'chi_tiet' => 'required|array',
        'chi_tiet.*.MaSP_FK' => 'required|exists:sanpham,MaSP',
        'chi_tiet.*.SLNhap' => 'required|integer|min:1',
        'chi_tiet.*.DonGia' => 'required|numeric|min:0',
    ]);

    $phieuNhap = PhieuNhap::create([
        'NgayNhap' => $request->NgayNhap,
        'MaNV_FK' => $request->MaNV_FK,
        'MaNCC_FK' => $request->MaNCC_FK,
    ]);

    foreach ($request->chi_tiet as $item) {
        ChiTietPhieuNhap::create([
            'MaPhieuNhap_FK' => $phieuNhap->MaPhieuNhap,
            'MaSP_FK' => $item['MaSP_FK'],
            'SLNhap' => $item['SLNhap'],
            'DonGia' => $item['DonGia'],
        ]);
    }

    $this->updateProductsAfterImport($phieuNhap->MaPhieuNhap);

    return redirect()->route('phieunhap.index')->with('success', 'Phiếu nhập đã được tạo thành công!');
    }
}

