<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;


class AddTriggerForCapNhatSoLuongTonKho extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Drop trigger nếu đã tồn tại
        DB::statement('DROP TRIGGER IF EXISTS trg_CapNhatSoLuongTonKho');

        // Tạo trigger mới
        DB::statement('
            CREATE TRIGGER trg_CapNhatSoLuongTonKho
            AFTER INSERT ON CHITIETHOADON
            FOR EACH ROW
            BEGIN
                DECLARE soluongton INT;
                DECLARE errorMessage VARCHAR(255);

                -- Kiểm tra tồn kho bằng hàm fnc_KiemTraSLT
                IF fnc_KiemTraSLT(NEW.MaHD_FK, NEW.MaSP_FK) THEN
                    -- Cập nhật số lượng tồn kho nếu đủ hàng
                    UPDATE SANPHAM
                    SET SoLuongTonKho = SoLuongTonKho - NEW.SoLuong
                    WHERE MaSP = NEW.MaSP_FK;
                ELSE
                    -- Gán thông báo lỗi vào biến errorMessage
                    SET errorMessage = CONCAT(\'Số lượng tồn kho không đủ cho mã sản phẩm \', NEW.MaSP_FK, \' trong hóa đơn \', NEW.MaHD_FK);
                    
                    -- Phát sinh lỗi với thông báo tùy chỉnh
                    SIGNAL SQLSTATE \'45000\'
                    SET MESSAGE_TEXT = errorMessage;
                END IF;
            END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Xóa trigger khi rollback migration
        DB::statement('DROP TRIGGER IF EXISTS trg_CapNhatSoLuongTonKho');
    }
}
