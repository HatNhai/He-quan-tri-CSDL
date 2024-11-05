{{-- resources/views/hoaDon/show.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết hóa đơn</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<style>
    /* public/css/custom-style.css */

/* Tổng thể trang */
body {
    font-family: 'Times New Roman', serif;
    background-color: #f9f9f9;
    color: #333;
}

/* Tiêu đề */
h2, h3 {
    text-align: center;
    color: #ff9900;
}

/* Panel chứa thông tin hóa đơn */
.panel-heading {
    background-color: #ffcc80 !important;
    color: #333 !important;
    font-weight: bold;
}

/* Bảng chi tiết sản phẩm */
.table {
    margin-top: 20px;
    background-color: #fff;
    border: 1px solid #ddd;
}

.table th {
    background-color: #ffcc80;
    color: #333;
    text-align: center;
}

.table td {
    text-align: center;
}

.table-bordered > tbody > tr:nth-child(even) {
    background-color: #f2f2f2;
}

/* Hiệu ứng hover */
.table-hover > tbody > tr:hover {
    background-color: #ffe0b2;
}

/* Kích thước và khoảng cách */
.container {
    margin-top: 20px;
}

/* Nội dung văn bản */
p {
    font-size: 16px;
}

/* Nội dung in đậm */
strong {
    color: #ff9900;
}

/* Nút Quay về trang chủ */
.back-home-btn {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #ff9900; /* Màu nền */
    color: white; /* Màu chữ */
    font-weight: bold;
    text-align: center;
    text-decoration: none; /* Không có gạch dưới */
    border-radius: 5px; /* Bo góc */
    transition: background-color 0.3s, transform 0.3s; /* Hiệu ứng chuyển màu và phóng to */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Đổ bóng cho nút */
}

.back-home-btn:hover {
    background-color: #e68a00; /* Màu nền khi hover */
    transform: scale(1.05); /* Phóng to nút khi hover */
    text-decoration: none; /* Không có gạch dưới khi hover */
}
</style>
<body>
    <div class="container">
        <h2>Chi tiết hóa đơn</h2>

        <div class="panel panel-default">
            <div class="panel-heading">Thông tin hóa đơn</div>
            <div class="panel-body">
                <p><strong>Mã hóa đơn:</strong> {{ $hoaDon->MaHD }}</p>
                <p><strong>Ngày lập hóa đơn:</strong> {{ $hoaDon->NgayLapHD }}</p>
                <p><strong>Tổng tiền:</strong> {{ number_format($hoaDon->TongTien, 2) }} VND</p>
            </div>
        </div>

        <h3>Chi tiết sản phẩm</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giảm giá</th>
                    <th>Ngày lập hóa đơn</th>
                    <th>Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                @foreach($chiTietHoaDons as $chiTiet)
                    <tr>
                        <td>{{ $chiTiet->TenSP }}</td>
                        <td>{{ number_format($chiTiet->GiaSP, 2) }} VND</td>
                        <td>{{ $chiTiet->SoLuong }}</td>
                        <td>{{ $chiTiet->GiamGia }}%</td>
                        <td>{{ $chiTiet->NgayLaphoaDon }}</td>
                        <td>{{ number_format($chiTiet->ThanhTien, 2) }} VND</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Nút Quay về trang chủ -->
        <a href="{{ route('hoaDon.index') }}" class="back-home-btn">
        <i class="glyphicon glyphicon-home"></i> Quay về trang chủ
    </a>
    </div>
</body>
</html>
