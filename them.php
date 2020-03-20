<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>THÊM</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="list.php" method="POST" role="form">
            <legend>Nhập thông tin sinh viên</legend>
            
            <div class="form-group">
                <label for="">Mã sinh viên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập mã sinh viên" name="msv">
            </div>
            
            <div class="form-group">
                <label for="">Họ tên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập họ tên" name="hoten">
            </div>

            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text" class="form-control" id="" placeholder="Nhập số điện thoại" name="sdt"
            </div>  

            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="Nhập Email" name="email">
            </div>

            <div class="form-group">
            	<label>Giới tính</label>
		        <div class="form-check form-check-inline">
					 <input class="form-check-input" type="radio" name="gt"  value="Nam">
					  <label class="form-check-label" >Nam</label>
				</div>

				<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="gt" value="Nữ">
					  <label class="form-check-label" >Nữ</label>
				</div>

				<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="gt"  value="Khác">
					  <label class="form-check-label" >Khác</label>
				</div>      
            </div>

            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Nhập địa chỉ" name="diachi">
            </div>

            <button type="submit" class="btn btn-primary"><a href="list.php"></a>Add</button>
        </form>
    </div>
</body>
</html>