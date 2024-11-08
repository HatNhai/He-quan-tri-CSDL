<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiTietHoaDonTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('chitiethoadon', function (Blueprint $table) {
            $table->unsignedBigInteger('MaHD_FK');
            $table->unsignedBigInteger('MaSP_FK');
            $table->string('TenSP', 100);
            $table->decimal('GiaSP', 10, 2);
            $table->integer('SoLuong');
            $table->decimal('GiamGia', 5, 2);
            $table->date('NgayLapHoaDon');
            $table->decimal('ThanhTien', 10, 2);
            $table->timestamps();

            $table->foreign('MaHD_FK')->references('MaHD')->on('hoadon')->onDelete('cascade');

            $table->foreign('MaSP_FK')->references('MaSP')->on('sanpham')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chitiethoadon');
    }
};
