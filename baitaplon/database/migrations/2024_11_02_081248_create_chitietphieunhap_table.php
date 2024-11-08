<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiTietPhieuNhapTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('chitietphieunhap', function (Blueprint $table) {
            $table->unsignedBigInteger('MaPhieuNhap_FK');
            $table->unsignedBigInteger('MaSP_FK');
            $table->integer('SLNhap');
            $table->decimal('DonGia', 10, 2);
            $table->timestamps();

            $table->foreign('MaPhieuNhap_FK')->references('MaPhieuNhap')->on('phieunhap')->onDelete('cascade');

            $table->foreign('MaSP_FK')->references('MaSP')->on('sanpham')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chitietphieunhap');
    }
};
