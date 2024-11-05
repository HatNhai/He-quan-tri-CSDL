<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class HoaDon extends Model
{
    use HasFactory;

    protected $table = 'hoadon';
    protected $primaryKey = 'MaHD';

    public function khachHang()
    {
        return $this->belongsTo(KhachHang::class, 'MaKH');
    }

    public function nhanVien()
    {
        return $this->belongsTo(NhanVien::class, 'MaNV');
    }

    public function chiTietHoaDons()
    {
        return $this->hasMany(ChiTietHoaDon::class, 'MaHD');
    }
}
