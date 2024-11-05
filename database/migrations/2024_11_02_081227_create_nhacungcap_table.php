<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhaCungCapTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nhacungcap', function (Blueprint $table) {
            $table->id('MaNCC');
            $table->string('TenNCC', 100);
            $table->string('DiaChi', 200);
            $table->string('SoDienThoai', 20);
            $table->string('email', 100);
            $table->string('TenNguoiLienHe', 100);
            $table->text('GhiChu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhacungcap');
    }
};
