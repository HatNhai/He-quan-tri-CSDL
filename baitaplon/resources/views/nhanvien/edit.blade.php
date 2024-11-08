<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cập Nhật Nhân Viên</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Custom CSS (optional for additional styling) -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        h1 {
            margin: 30px 0;
            text-align: center;
            color: #343a40;
        }
        .container {
            max-width: 600px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Cập Nhật Thông Tin Nhân Viên</h1>
        <form action="{{ route('nhanvien.update', $Nhanvien->MaNV) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="HoTenNV" class="form-label">Họ Tên Nhân Viên</label>
                <input type="text" class="form-control" id="HoTenNV" name="HoTenNV" value="{{ $Nhanvien->HoTenNV }}" required>
            </div>
            <div class="mb-3">
                <label for="GioiTinh" class="form-label">Giới Tính</label>
                <select class="form-select" id="GioiTinh" name="GioiTinh" required>
                    <option value="Nam" {{ $Nhanvien->GioiTinh == 'Nam' ? 'selected' : '' }}>Nam</option>
                    <option value="Nữ" {{ $Nhanvien->GioiTinh == 'Nữ' ? 'selected' : '' }}>Nữ</option>
                    <option value="Khác" {{ $Nhanvien->GioiTinh == 'Khác' ? 'selected' : '' }}>Khác</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="NgaySinh" class="form-label">Ngày Sinh</label>
                <input type="date" class="form-control" id="NgaySinh" name="NgaySinh" value="{{ $Nhanvien->NgaySinh }}" required>
            </div>
            <div class="mb-3">
                <label for="DiaChi" class="form-label">Địa Chỉ</label>
                <input type="text" class="form-control" id="DiaChi" name="DiaChi" value="{{ $Nhanvien->DiaChi }}" required>
            </div>
            <div class="mb-3">
                <label for="DienThoai" class="form-label">Điện Thoại</label>
                <input type="text" class="form-control" id="DienThoai" name="DienThoai" value="{{ $Nhanvien->DienThoai }}" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Cập Nhật Nhân Viên</button>
        </form>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGz3clFfP7Kr6a2KoNUNF6LGV+1z+AnpZ4sU6R9G6A8rX" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93A5j7XWQ4geI1f5eYkSND1yDeHUoBKgMvU9PXY1VZrjGAnZLMU8jz4GvYZp6g" crossorigin="anonymous"></script>
</body>
</html>
