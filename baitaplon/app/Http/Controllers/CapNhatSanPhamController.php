<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CapNhatSanPhamController extends Controller
{
    public function updateProductAfterImport($maNH)
    {
        try {
            // Gọi thủ tục CapNhatSanPham với tham số maNH
            DB::statement("CALL CapNhatSanPham(?)", [$maNH]);
            return redirect()->back()->with('success', 'Cập nhật sản phẩm thành công sau khi nhập hàng!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Cập nhật thất bại: ' . $e->getMessage());
        }
    }
}
