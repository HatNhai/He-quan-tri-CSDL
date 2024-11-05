<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class SanPham extends Model
{
    use HasFactory;

    protected $table = 'sanpham';
    protected $primaryKey = 'MaSP';
    protected $fillable = ['TenSP', 'LoaiSP', 'HinhThucDongGoi', 'GiaSP', 'SoLuongTonKho'];

    public function chiTietHoaDons()
    {
        return $this->hasMany(ChiTietHoaDon::class, 'MaSP');
    }

    public function chiTietPhieuNhaps()
    {
        return $this->hasMany(ChiTietPhieuNhap::class, 'MaSP');
    }
}
