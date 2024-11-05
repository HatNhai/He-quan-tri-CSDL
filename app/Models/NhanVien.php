<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NhanVien extends Model
{
    use HasFactory;
    
    protected $fillable=['HoTenNV', 'GioiTinh','NgaySinh','DiaChi','DienThoai'];
    protected $table = 'nhanvien';
    protected $primaryKey = 'MaNV';

    public function hoaDons()
    {
        return $this->hasMany(HoaDon::class, 'MaNV');
    }

    public function phieuNhaps()
    {
        return $this->hasMany(PhieuNhap::class, 'MaNV');
    }
}
