<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NhanVien;
use App\Models\KhachHang;
use App\Models\HoaDon;
use App\Models\ChiTietHoaDon;
use Illuminate\Support\Facades\DB;

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

    public function create()
    {
        $nhanviens = NhanVien::all();
        $khachhangs = KhachHang::all();
        return view('hoaDon.create', compact('nhanviens', 'khachhangs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction(); 

        try {
            // Kiểm tra và xác thực dữ liệu đầu vào
            $validatedData = $request->validate([
                'MaKH_FK' => 'required',
                'MaNV_FK' => 'required',
                'NgayLapHD' => 'required|date',
                'products.*.MaSP' => 'required|integer',
                'products.*.TenSP' => 'required',
                'products.*.GiaSP' => 'required|numeric',
                'products.*.SoLuong' => 'required|numeric',
                'products.*.GiamGia' => 'nullable|numeric',
            ]);

            // Lưu thông tin hóa đơn
            $hoadon = new HoaDon();
            $hoadon->MaKH_FK = $request->MaKH_FK;
            $hoadon->MaNV_FK = $request->MaNV_FK;
            $hoadon->NgayLapHD = $request->NgayLapHD;
            $hoadon->TongTien = 0;
            $hoadon->save();

            // Lưu chi tiết hóa đơn
            $tongTien = 0;
            foreach ($request->products as $product) {
                // Gọi thủ tục để cập nhật giảm giá và tính thành tiền
                $result = DB::select('CALL proc_GiamGia(?, ?, ?)', [
                    $product['MaSP'],
                    $product['GiamGia'] ?? 0,
                    $product['SoLuong']+
                ]);

                // Tính thành tiền cho sản phẩm
                $thanhTien = ($product['GiaSP'] * $product['SoLuong']) - (($product['GiamGia'] ?? 0) * $product['GiaSP'] * $product['SoLuong'] / 100);
                
                // Lưu chi tiết hóa đơn
                $chitiet = new ChiTietHoaDon();
                $chitiet->MaHD_FK = $hoadon->MaHD;
                $chitiet->MaSP_FK = $product['MaSP'];
                $chitiet->TenSP = $product['TenSP'];
                $chitiet->GiaSP = $product['GiaSP'];
                $chitiet->SoLuong = $product['SoLuong'];
                $chitiet->GiamGia = $product['GiamGia'] ?? 0;
                $chitiet->ThanhTien = $thanhTien > 0 ? $thanhTien : 0; // Đảm bảo thành tiền không âm
                $chitiet->NgayLapHoaDon = $hoadon->NgayLapHD; 
                $chitiet->save();

                $tongTien += $chitiet->ThanhTien; // Cộng dồn vào tổng tiền
            }

            // Cập nhật tổng tiền
            $hoadon->TongTien = $tongTien;
            $hoadon->save();

            DB::commit(); // Commit nếu không có lỗi

            return redirect()->route('Trangchu')->with('success', 'Hóa đơn đã được tạo thành công!');
        } catch (\Exception $e) {
            DB::rollback(); // Quay lại nếu có lỗi
            dd($e->getMessage()); // In ra thông báo lỗi
        }
    }
}
