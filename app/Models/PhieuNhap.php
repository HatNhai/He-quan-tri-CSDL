<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class PhieuNhap extends Model
{
    use HasFactory;

    protected $table = 'phieunhap';
    protected $primaryKey = 'MaPhieuNhap';

    public function nhaCungCap()
    {
        return $this->belongsTo(NhaCungCap::class, 'MaNCC');
    }

    public function nhanVien()
    {
        return $this->belongsTo(NhanVien::class, 'MaNV');
    }

    public function chiTietPhieuNhaps()
    {
        return $this->hasMany(ChiTietPhieuNhap::class, 'MaPhieuNhap');
    }
}
