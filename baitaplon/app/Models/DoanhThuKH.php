<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DoanhThuKH extends Model
{
    protected $table = 'view_DoanhThuKH';

    // Không có cột ID duy nhất trong view
    protected $primaryKey = null;
    public $incrementing = false;

    // Bỏ timestamps nếu view không có các cột này
    public $timestamps = false;

    protected $fillable = ['MaKH', 'TenKH', 'SoHD', 'TongDoanhThu'];
}