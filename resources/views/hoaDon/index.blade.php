<!-- resources/views/hoaDon/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh sách hóa đơn</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
    /* public/css/style.css */
    body {
        font-family: 'Times New Roman', serif;
        background-color: #f9f9f9;
        color: #333;
    }

    h1 {
        text-align: center;
        color: #ff9900;
    }

    table {
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
    }

    table, th, td {
        border: 1px solid #ddd;
    }

    th, td {
        padding: 10px;
        text-align: center;
    }

    th {
        background-color: #ffcc80;
        color: #333;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ffe0b2;
    }

    a {
        color: #ff9900;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    /* Style cho nút Quay về trang chủ */
    .back-home-btn {
        display: block;
        width: 200px;
        margin: 20px auto;
        text-align: center;
        background-color: #ff9900;
        color: #fff;
        font-size: 16px;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
    }

    .back-home-btn:hover {
        background-color: #ffb347;
        text-decoration: none;
        color: #fff;
    }
</style>
</head>
<body>
    <h1>Danh sách hoá đơn</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Mã Hóa Đơn</th>
                <th>Mã Khách Hàng</th>
                <th>Mã Nhân Viên</th>
                <th>Ngày Lập Hóa Đơn</th>
                <th>Tổng Tiền</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hoaDons as $hoaDon)
                <tr>
                    <td>{{ $hoaDon->MaHD }}</td>
                    <td>{{ $hoaDon->MaKH_FK }}</td>
                    <td>{{ $hoaDon->MaNV_FK }}</td>
                    <td>{{ $hoaDon->NgayLapHD }}</td>
                    <td>{{ $hoaDon->TongTien }}</td>
                    <td><a href="{{ route('hoaDon.show', $hoaDon->MaHD) }}">Xem chi tiết</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <!-- Nút Quay về trang chủ -->
    <a href="{{ route('Trangchu') }}" class="back-home-btn">
        <i class="glyphicon glyphicon-home"></i> Quay về trang chủ
    </a>
</body>
</html>
