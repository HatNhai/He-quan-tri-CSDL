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
<title>Sửa NCC</title>
</head>
<body>

<h1 style="margin: 50px 50px">Cập nhật thông tin nhà cung cấp</h1>

<form action="{{ route('nhacungcap.update', $nhacungcap->MaNCC) }}" method="POST" style="margin: 50px 50px">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="TenNCC">Tên nhà cung cấp</label>
        <input type="text" name="TenNCC" class="form-control" value="{{ $nhacungcap->TenNCC }}" required>
    </div>
    <div class="form-group">
        <label for="DiaChi">Địa chỉ</label>
        <input type="text" name="DiaChi" class="form-control" value="{{ $nhacungcap->DiaChi }}" required>
    </div>
    <div class="form-group">
        <label for="SoDienThoai">Số điện thoại</label>
        <input type="text" name="SoDienThoai" class="form-control" value="{{ $nhacungcap->SoDienThoai }}" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control" value="{{ $nhacungcap->email }}" required>
    </div>
    <div class="form-group">
        <label for="">Tên người liên hệ</label>
        <input type="text" name="TenNguoiLienHe" class="form-control" value="{{ $nhacungcap->TenNguoiLienHe }}" required>
    </div>
    <div class="form-group">
        <label for="GhiChu">Ghi chú</label>
        <input type="text" name="GhiChu" class="form-control" value="{{ $nhacungcap->GhiChu }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Cập nhật</button>
</form>

</body>
</html>