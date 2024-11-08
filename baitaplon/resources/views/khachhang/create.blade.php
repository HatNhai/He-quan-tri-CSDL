<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Khách Hàng</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2 class="mt-4">Thêm Khách Hàng</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('khachhang.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="TenKH">Tên Khách Hàng</label>
                <input type="text" class="form-control" id="TenKH" name="TenKH" required>
            </div>
            <div class="form-group">
                <label for="DienThoai">Số Điện Thoại</label>
                <input type="text" class="form-control" id="DienThoai" name="DienThoai" required maxlength="10">
            </div>
            <div class="form-group">
                <label for="DiaChi">Địa Chỉ</label>
                <textarea class="form-control" id="DiaChi" name="DiaChi" required></textarea>
            </div>

            <!-- Thêm các trường khác nếu cần -->

            <button type="submit" class="btn btn-primary">Lưu</button>
            <a href="{{ route('khachhang.index') }}" class="btn btn-secondary">Hủy</a>
        </form>
    </div>
</body>
</html>
