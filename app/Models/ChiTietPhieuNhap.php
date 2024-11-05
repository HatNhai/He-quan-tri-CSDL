<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ChiTietPhieuNhap extends Model
{
    use HasFactory;

    protected $table = 'chitietphieunhap';

    public function phieuNhap()
    {
        return $this->belongsTo(PhieuNhap::class, 'MaPhieuNhap');
    }

    public function sanPham()
    {
        return $this->belongsTo(SanPham::class, 'MaSP');
    }
}
