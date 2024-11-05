<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KhachHang extends Model
{
    use HasFactory;
    protected $table = 'khachhang';
    protected $primaryKey = 'MaKH';

    protected $fillable = [
        'TenKH',
        'DienThoai',
        'DiaChi',
        // Thêm các trường khác nếu cần
    ];

    public function hoaDons()
    {
        return $this->hasMany(HoaDon::class, 'MaKH');
    }
}
