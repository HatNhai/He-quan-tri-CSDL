<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhieuNhapTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('phieunhap', function (Blueprint $table) {
            $table->id('MaPhieuNhap');
            $table->date('NgayNhap');
            $table->unsignedBigInteger('MaNV_FK');
            $table->unsignedBigInteger('MaNCC_FK');
            $table->timestamps();

            $table->foreign('MaNV_FK')->references('MaNV')->on('nhanvien')->onDelete('cascade');

            $table->foreign('MaNCC_FK')->references('MaNCC')->on('nhacungcap')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phieunhap');
    }
};
