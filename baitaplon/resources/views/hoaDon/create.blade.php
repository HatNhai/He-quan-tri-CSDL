<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <title>Thêm mới hóa đơn</title>
</head>
<body>
<div class="container">
    <h2>Tạo Hóa Đơn Mới</h2>

    <form action="{{ route('hoadon.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <div class="form-group">
                    <label for="ma_khach">Mã Khách hàng</label>
                    <input type="text" name="MaKH_FK" id="ma_khach" class="form-control" placeholder="Nhập mã khách hàng" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="ma_nhanvien">Mã Nhân viên</label>
                    <input type="text" name="MaNV_FK" id="ma_nhanvien" class="form-control" placeholder="Nhập mã nhân viên" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="ngay_lap">Ngày lập hóa đơn</label>
                    <input type="date" name="NgayLapHD" id="ngay_lap" class="form-control" required>
                </div>
            </div>
        </div>

        <h4>Chi Tiết Hóa Đơn</h4>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-bordered" id="products_table">
            <thead>
                <tr>
                    <th>Mã Sản Phẩm</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Giá Sản Phẩm</th>
                    <th>Số Lượng</th>
                    <th>Giảm Giá (%)</th>
                    <th>Thành Tiền</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="products[0][MaSP]" class="form-control" placeholder="Mã sản phẩm" required></td>
                    <td><input type="text" name="products[0][TenSP]" class="form-control" placeholder="Tên sản phẩm" required></td>
                    <td><input type="number" name="products[0][GiaSP]" class="form-control" placeholder="Giá" required step="0.01" onchange="calculateTotal(0)"></td>
                    <td><input type="number" name="products[0][SoLuong]" class="form-control" placeholder="Số lượng" onchange="calculateTotal(0)" required></td>
                    <td><input type="number" name="products[0][GiamGia]" class="form-control" placeholder="Giảm giá" onchange="calculateTotal(0)"></td>
                    <td><input type="number" name="products[0][ThanhTien]" class="form-control" readonly></td>
                    <td><button type="button" class="btn btn-danger" onclick="removeProduct(this)">Xóa</button></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" class="text-right"><strong>Tổng Tiền:</strong></td>
                    <td><input type="number" name="tong_tien" id="tong_tien" class="form-control" readonly></td>
                    <td></td>
                </tr>
            </tfoot>
        </table>

        <button type="button" class="btn btn-primary" onclick="addProduct()">Thêm Sản Phẩm</button>
        <button type="submit" class="btn btn-success">Tạo Hóa Đơn</button>
    </form>
</div>

<script>
    let productIndex = 1;

    function addProduct() {
        const tableBody = document.querySelector('#products_table tbody');
        const newRow = document.createElement('tr');

        newRow.innerHTML = `
            <td><input type="text" name="products[${productIndex}][MaSP]" class="form-control" placeholder="Mã sản phẩm" required></td>
            <td><input type="text" name="products[${productIndex}][TenSP]" class="form-control" placeholder="Tên sản phẩm" required></td>
            <td><input type="number" name="products[${productIndex}][GiaSP]" class="form-control" placeholder="Giá" required step="0.01" onchange="calculateTotal(${productIndex})"></td>
            <td><input type="number" name="products[${productIndex}][SoLuong]" class="form-control" placeholder="Số lượng" onchange="calculateTotal(${productIndex})" required></td>
            <td><input type="number" name="products[${productIndex}][GiamGia]" class="form-control" placeholder="Giảm giá" onchange="calculateTotal(${productIndex})"></td>
            <td><input type="number" name="products[${productIndex}][ThanhTien]" class="form-control" readonly></td>
            <td><button type="button" class="btn btn-danger" onclick="removeProduct(this)">Xóa</button></td>
        `;

        tableBody.appendChild(newRow);
        productIndex++;
    }

    function removeProduct(button) {
        const row = button.closest('tr');
        row.remove();
        calculateTotalPrice();
    }

    function calculateTotal(index) {
        const row = document.querySelector(`#products_table tbody`).children[index];
        const price = parseFloat(row.querySelector(`input[name="products[${index}][GiaSP]"]`).value) || 0;
        const quantity = parseFloat(row.querySelector(`input[name="products[${index}][SoLuong]"]`).value) || 0;
        const discount = parseFloat(row.querySelector(`input[name="products[${index}][GiamGia]"]`).value) || 0;

        const total = (price * quantity) - ((discount / 100) * price * quantity);
        row.querySelector(`input[name="products[${index}][ThanhTien]"]`).value = total > 0 ? total.toFixed(2) : 0;
        
        calculateTotalPrice();
    }

    function calculateTotalPrice() {
        const rows = document.querySelectorAll('#products_table tbody tr');
        let grandTotal = 0;

        rows.forEach(row => {
            const total = parseFloat(row.querySelector(`input[name$="[ThanhTien]"]`).value) || 0;
            grandTotal += total;
        });

        document.getElementById('tong_tien').value = grandTotal.toFixed(2);
    }
</script>
</body>
</html>
