<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous">
    <title>Thêm mới</title>
</head>

<body>

    <main class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm">
                <h1 class="text-center text-uppercase fw-bold">Thêm mới</h1>
                <form action="{{route('sanpham.store') }}" method="POST" style="margin: 50px 50px">
                    @csrf

                    <div class="mb-3">
                        <label for="TenSP" class="form-label">Tên sản phẩm</label>
                        <input type="text" class="form-control" id="TenSP" name="TenSP" required>
                        
                    </div>

                    <div class="mb-3">
                        <label for="LoaiSP" class="form-label">Loại sản phẩm</label>
                        <input type="text" class="form-control" id="LoaiSP" name="LoaiSP" required>
                    </div>

                    <div class="mb-3">
                        <label for="HinhThucDongGoi" class="form-label">Hình thức đóng gói</label>
                        <input type="date" class="form-control" id="HinhThucDongGoi" name="HinhThucDongGoi" required>
                    </div>
                    <div class="mb-3">
                        <label for="GiaSP" class="form-label">Giá sản phẩm</label>
                        <input class="form-control" id="GiaSP" name="GiaSP" rows="1" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="SoLuongTonKho" class="form-label">Số lượng tồn kho</label>
                        <input type="number" class="form-control" id="SoLuongTonKho" name="SoLuongTonKho" required>
                    </div>
                    
                    
                    <div class="form-group  float-end">
                        <input type="submit" value="Thêm" class="btn btn-success">
                        <a href="{{ route('sanpham.index') }}" class="btn btn-warning ">Quay lại</a>
                    </div>

                </form>
            </div>
        </div>
    </main>
</body>