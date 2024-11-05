<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ChiTietHoaDon extends Model
{
    use HasFactory;

    protected $table = 'chitiethoadon';

    public function hoaDon()
    {
        return $this->belongsTo(HoaDon::class, 'MaHD');
    }

    public function sanPham()
    {
        return $this->belongsTo(SanPham::class, 'MaSP');
    }
}
