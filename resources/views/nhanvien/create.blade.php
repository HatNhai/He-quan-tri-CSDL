<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nhân Viên</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
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
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Thêm Nhân Viên Mới</h1>
        <form action="{{ route('nhanvien.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="HoTenNV" class="form-label">Họ Tên Nhân Viên</label>
                <input type="text" class="form-control" id="HoTenNV" name="HoTenNV" required>
            </div>
            <div class="mb-3">
                <label for="GioiTinh" class="form-label">Giới Tính</label>
                <select class="form-select" id="GioiTinh" name="GioiTinh" required>
                    <option value="">Chọn Giới Tính</option>
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                    <option value="Khác">Khác</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="NgaySinh" class="form-label">Ngày Sinh</label>
                <input type="date" class="form-control" id="NgaySinh" name="NgaySinh" required>
            </div>
            <div class="mb-3">
                <label for="DiaChi" class="form-label">Địa Chỉ</label>
                <input type="text" class="form-control" id="DiaChi" name="DiaChi" required>
            </div>
            <div class="mb-3">
                <label for="DienThoai" class="form-label">Điện Thoại</label>
                <input type="text" class="form-control" id="DienThoai" name="DienThoai" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Thêm Nhân Viên</button>
        </form>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGz3clFfP7Kr6a2KoNUNF6LGV+1z+AnpZ4sU6R9G6A8rX" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93A5j7XWQ4geI1f5eYkSND1yDeHUoBKgMvU9PXY1VZrjGAnZLMU8jz4GvYZp6g" crossorigin="anonymous"></script>
</body>
</html>
