<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class NhaCungCap extends Model
{
    use HasFactory;

    protected $table = 'nhacungcap';
    protected $primaryKey = 'MaNCC';

    public function phieuNhaps()
    {
        return $this->hasMany(PhieuNhap::class, 'MaNCC');
    }
}
