<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CapNhatSanPhamController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\ThongKeDoanhThuSanPhamController;
use App\Http\Controllers\ChiTietHoaDonController;
use App\Http\Controllers\NhaCungCapController;
use App\Http\Controllers\NhanvienviewController;
use App\Models\ChiTietHoaDon;
// Đường dẫn hiển thị view nhân viên
Route::get('/nhanvienview', [NhanvienviewController::class, 'index'])->name('nhanvienview.view');
// Đường dẫn hiển thị danh sách đồ án (trang chủ)
Route::get('/nhanvien', [NhanVienController::class, 'index'])->name('nhanvien.index');

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/login', [IndexController::class, 'login'])->name('login');
Route::get('/Trangchu', [IndexController::class, 'Trangchu'])->name('Trangchu');
Route::get('/Trangchuql', [IndexController::class, 'Trangchuql'])->name('Trangchuql');

Route::get('/doanhthu', [ThongKeDoanhThuSanPhamController::class, 'index'])->name('doanhthu.index');
Route::get('/cap-nhat-san-pham/{maNH}', [CapNhatSanPhamController::class, 'updateProductAfterImport']);
Route::get('/sanpham', [SanPhamController::class, 'index'])->name('sanpham.index');

Route::get('/sanpham/create', [SanPhamController::class, 'create'])->name('sanpham.create');
Route::post('/sanpham', [SanPhamController::class, 'store'])->name('sanpham.store');

Route::get('/chitiethoadon', [ChiTietHoaDonController::class, 'index'])->name('chitiethoadon.index');

use App\Http\Controllers\HoaDonController;

Route::get('/hoaDon', [HoaDonController::class, 'index'])->name('hoaDon.index');
Route::get('/hoaDon/{id}', [HoaDonController::class, 'show'])->name('hoaDon.show');

// khach hang

Route::get('/khachhang', [KhachHangController::class, 'index'])->name('khachhang.index');
Route::get('/khachhang/doanhthu', [KhachHangController::class, 'doanhThu'])->name('khachhang.doanhthuKH');
Route::get('/khachhang/create', [KhachHangController::class, 'create'])->name('khachhang.create');
Route::get('/khachhang/{MaKH}/edit', [KhachHangController::class, 'edit'])->name('khachhang.edit');
Route::put('/khachhang/{MaKH}', [KhachHangController::class, 'update'])->name('khachhang.update');
Route::delete('/khachhang/{id}', [KhachHangController::class, 'destroy'])->name('khachhang.destroy');
Route::post('/khachhang', [KhachHangController::class, 'store'])->name('khachhang.store');

//nha cung cap 
use App\Http\Controllers\ViewNhaCungCapController;
Route::get('/viewnhacungcap', [ViewNhaCungCapController::class, 'index'])->name('viewnhacungcap.index');
// Đường dẫn hiển thị danh sách đồ án (trang chủ)
Route::get('/nhacungcap', [NhaCungCapController::class, 'index'])->name('nhacungcap.index');
// Đường dẫn để tạo mới một NCC (hiển thị form thêm mới)
Route::get('/nhacungcap/create', [NhaCungCapController::class, 'create'])->name('nhacungcap.create');
// Đường dẫn để lưu dữ liệu NCC mới (thực hiện thêm mới)
Route::post('/nhacungcap', [NhaCungCapController::class, 'store'])->name('nhacungcap.store');
// Đường dẫn để xóa NCC (thực hiện xóa sau khi có modal xác nhận)
Route::delete('/nhacungcap/{nhacungcap}', [NhaCungCapController::class, 'destroy'])->name('nhacungcap.destroy');
// Hiển thị form chỉnh sửa NCC
Route::get('/nhacungcap/{nhacungcap}/edit', [NhaCungCapController::class, 'edit'])->name('nhacungcap.edit');
// Cập nhật thông tin NCC
Route::put('/nhacungcap/{nhacungcap}', [NhaCungCapController::class, 'update'])->name('nhacungcap.update');


//nhan vien
// Đường dẫn hiển thị danh sách nhân viên (trang chủ)
Route::get('/nhanvien', [NhanVienController::class, 'index'])->name('nhanvien.index');
// Đường dẫn để tạo mới một nhân viên (hiển thị form thêm mới)
Route::get('/nhanvien/create', [NhanVienController::class, 'create'])->name('nhanvien.create');
// Đường dẫn để lưu dữ liệu nhân viên mới (thực hiện thêm mới)
Route::post('/nhanvien', [NhanVienController::class, 'store'])->name('nhanvien.store');
// Đường dẫn để xóa nhân viên (thực hiện xóa sau khi có modal xác nhận)
Route::delete('/nhanvien/{nhanvien}', [NhanVienController::class, 'destroy'])->name('nhanvien.destroy');
// Hiển thị form chỉnh sửa nhân viên
Route::get('/nhanvien/{nhanvien}/edit', [NhanVienController::class, 'edit'])->name('nhanvien.edit');
// Cập nhật thông tin nhân viên
Route::put('/nhanvien/{nhanvien}', [NhanVienController::class, 'update'])->name('nhanvien.update');


//Phieu nhap
use App\Http\Controllers\PhieuNhapController;
Route::get('/phieunhap', [PhieuNhapController::class, 'index'])->name('phieunhap.index');
Route::get('/phieunhap/create', [PhieuNhapController::class, 'create'])->name('phieunhap.create');
Route::post('/phieunhap', [PhieuNhapController::class, 'store'])->name('phieunhap.store');

//Hoa don
Route::get('/hoaDon', [HoaDonController::class, 'index'])->name('hoaDon.index');
Route::get('/hoaDon/{id}', [HoaDonController::class, 'show'])->name('hoaDon.show');
Route::get('/hoadon/create', [HoaDonController::class, 'create'])->name('hoadon.create');
Route::post('/hoadon/store', [HoaDonController::class, 'store'])->name('hoadon.store');
Route::post('/update-thanh-tien', [HoaDonController::class, 'updateThanhTien']);

//login
Route::get('/Dangki', [IndexController::class, 'create'])->name('Dangki');
Route::post('/Dangki', [IndexController::class, 'store'])->name('store');
Route::post('/Tranngchu', [IndexController::class, 'logout'])->name('logout');
Route::post('/login', [IndexController::class, 'checklogin'])->name('checklogin');