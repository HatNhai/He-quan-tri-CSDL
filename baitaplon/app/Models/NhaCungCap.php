<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class NhaCungCap extends Model
{
    use HasFactory;

    protected $table = 'nhacungcap';
    protected $primaryKey = 'MaNCC';

    protected $fillable = ['TenNCC', 'DiaChi', 'SoDienThoai', 'email', 'TenNguoiLienHe','GhiChu'];

    public function phieuNhaps()
    {
        return $this->hasMany(PhieuNhap::class, 'MaNCC');
    }
}
