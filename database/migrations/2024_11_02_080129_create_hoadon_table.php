<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoaDonTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hoadon', function (Blueprint $table) {
            $table->id('MaHD');
            $table->unsignedBigInteger('MaKH_FK');
            $table->unsignedBigInteger('MaNV_FK');
            $table->date('NgayLapHD');
            $table->decimal('TongTien', 10, 2);
            $table->timestamps();

            $table->foreign('MaKH_FK')->references('MaKH')->on('khachhang')->onDelete('cascade');

            $table->foreign('MaNV_FK')->references('MaNV')->on('nhanvien')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hoadon');
    }
};
