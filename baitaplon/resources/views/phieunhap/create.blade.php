<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo Phiếu Nhập</title>
</head>
<style>
/* Reset styles */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

/* Body and form styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fc;
    color: #333;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    margin: 0;
    padding: 20px;
}

/* Form container */
form {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    padding: 20px 30px;
    width: 100%;
    max-width: 500px;
}

/* Title */
h1 {
    font-size: 26px;
    color: #333;
    text-align: center;
    margin-bottom: 20px;
}

/* Error message styling */
ul {
    list-style-type: none;
    color: #d9534f;
    margin-bottom: 15px;
}

/* Form input fields */
label {
    display: block;
    font-weight: bold;
    margin: 10px 0 5px;
    color: #555;
}

input[type="text"],
input[type="date"],
input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 5px;
    border: 1px solid #ced4da;
    font-size: 14px;
    outline: none;
    transition: border-color 0.3s;
    background-color: #f9fafc;
}

input[type="text"]:focus,
input[type="date"]:focus,
input[type="number"]:focus {
    border-color: #007bff;
}

/* Button styles */
button {
    display: inline-block;
    width: 100%;
    background-color: #007bff;
    border: none;
    color: #ffffff;
    padding: 12px;
    font-size: 16px;
    font-weight: bold;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 10px;
    transition: background-color 0.3s;
    text-align: center;
}

button:hover {
    background-color: #0056b3;
}

/* "Thêm Chi Tiết" button style */
button[type="button"] {
    background-color: #28a745;
    width: auto;
    padding: 10px 15px;
    font-size: 14px;
    margin-top: 10px;
}

button[type="button"]:hover {
    background-color: #218838;
}

/* Styling for chi tiết section */
#chi-tiet-container {
    margin-top: 15px;
}

.chi-tiet {
    border: 1px solid #e9ecef;
    border-radius: 5px;
    padding: 15px;
    margin-bottom: 15px;
    background-color: #f8f9fa;
}

.chi-tiet label {
    margin: 5px 0;
}
/* Back to home button */
.col-sm-6.text-right {
    margin-top: 15px;
    text-align: right;
}

.col-sm-6.text-right a.btn {
    display: inline-flex;
    align-items: center;
    padding: 10px 20px;
    background-color: #007bff;
    color: #ffffff;
    font-weight: bold;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
    font-size: 14px;
}

.col-sm-6.text-right a.btn i {
    margin-right: 8px;
}

.col-sm-6.text-right a.btn:hover {
    background-color: #0056b3;
}

</style>
<body>
   

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('phieunhap.store') }}" method="POST">
        @csrf
        <h1>Tạo phiếu nhập sản phẩm</h1>
        <label for="NgayNhap">Ngày Nhập:</label>
        <input type="date" name="NgayNhap" id="NgayNhap" required>

        <label for="MaNV_FK">Mã Nhân Viên:</label>
        <input type="text" name="MaNV_FK" id="MaNV_FK" required>

        <label for="MaNCC_FK">Mã Nhà Cung Cấp:</label>
        <input type="text" name="MaNCC_FK" id="MaNCC_FK" required>

        <h3>Chi Tiết Phiếu Nhập</h3>
        <div id="chi-tiet-container">
            <div class="chi-tiet">
                <label for="MaSP_FK">Mã Sản Phẩm:</label>
                <input type="text" name="chi_tiet[0][MaSP_FK]" required>

                <label for="SLNhap">Số Lượng Nhập:</label>
                <input type="number" name="chi_tiet[0][SLNhap]" min="1" required>

                <label for="DonGia">Đơn Giá:</label>
                <input type="number" name="chi_tiet[0][DonGia]" step="0.01" min="0" required>
            </div>
        </div>
        <button type="button" onclick="addChiTiet()">Thêm Chi Tiết</button>
        <button type="submit">Tạo Phiếu Nhập</button>

        <div class="col-sm-6 text-right">
            <a href="{{ route('Trangchu') }}" class="btn btn-primary">
                <i class="fa fa-home"></i> <span>Quay về trang chủ</span>
            </a>
        </div>
    </form>

    <script>
        let chiTietCount = 1;

        function addChiTiet() {
            const container = document.getElementById('chi-tiet-container');
            const newDetail = `
                <div class="chi-tiet">
                    <label for="MaSP_FK">Mã Sản Phẩm:</label>
                    <input type="text" name="chi_tiet[${chiTietCount}][MaSP_FK]" required>

                    <label for="SLNhap">Số Lượng Nhập:</label>
                    <input type="number" name="chi_tiet[${chiTietCount}][SLNhap]" min="1" required>

                    <label for="DonGia">Đơn Giá:</label>
                    <input type="number" name="chi_tiet[${chiTietCount}][DonGia]" step="0.01" min="0" required>
                </div>
            `;
            container.insertAdjacentHTML('beforeend', newDetail);
            chiTietCount++;
        }
    </script>
</body>
</html>
