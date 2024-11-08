<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-
alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-
GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
crossorigin="anonymous">
<title>Thêm mới NCC</title>
</head>
<body>


    <h1 style="margin: 50px 50px">Thêm nhà cung cấp mới</h1>
    <form action="{{ route('nhacungcap.store') }}" method="POST" style="margin: 50px 50px">
        @csrf
        <div class="mb-3">
            <label for="TenNCC" class="form-label">Tên nhà cung cấp</label>
            <input type="text" class="form-control" id="TenNCC" name="TenNCC" required>
        </div>
        <div class="mb-3">
            <label for="DiaChi" class="form-label">Địa chỉ</label>
            <input type="text" class="form-control" id="DiaChi" name="DiaChi" required>
        </div>
        <div class="mb-3">
            <label for="SoDienThoai" class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" id="SoDienThoai" name="SoDienThoai" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="TenNguoiLienHe" class="form-label">Tên người liên hệ</label>
            <input type="text" class="form-control" id="TenNguoiLienHe" name="TenNguoiLienHe" required>
        </div>
        <div class="mb-3">
            <label for="GhiChu" class="form-label">Ghi chú</label>
            <input type="text" class="form-control" id="GhiChu" name="GhiChu" required>
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>

</body>
</html>