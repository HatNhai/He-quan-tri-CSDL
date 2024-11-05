<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateViewThongKeDoanhThuSanPham extends Migration
{
    public function up()
    {
        DB::statement("
            CREATE VIEW v_ThongKeDoanhThuSanPham  
            AS
            SELECT 
                SANPHAM.MaSP,
                SANPHAM.TenSP,
                SANPHAM.GiaSP,
                SUM(CHITIETHOADON.SoLuong) AS TongSoLuongBan,
                SUM(CHITIETHOADON.SoLuong * SANPHAM.GiaSP - CHITIETHOADON.GiamGia) AS TongDoanhThu
            FROM SANPHAM
            JOIN CHITIETHOADON ON SANPHAM.MaSP = CHITIETHOADON.MaSP_FK
            JOIN HOADON ON CHITIETHOADON.MaHD_FK = HOADON.MaHD
            GROUP BY SANPHAM.MaSP, SANPHAM.TenSP, SANPHAM.GiaSP;
        ");
    }

    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS v_ThongKeDoanhThuSanPham");
    }
}
