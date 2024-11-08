<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanVienTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
        {
            Schema::create('nhanvien', function (Blueprint $table) {
                $table->id('MaNV');
                $table->string('HoTenNV');
                $table->string('GioiTinh');
                $table->date('NgaySinh');
                $table->string('DiaChi');
                $table->string('DienThoai');
                $table->timestamps(); // Nếu bạn muốn có cột created_at và updated_at
            });
        }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhanvien');
    }
};
