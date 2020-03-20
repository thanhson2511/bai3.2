<?php
	session_start();
	if (isset($_Session['info'])) {
		$data = $_Session['info'];
	}else{
		$data = array();
	}
	echo "<h1>Thông tin sinh viên</h1>";
	echo 'Mã sinh viên: '.$_POST['msv'].'<br>';
	echo 'Họ tên: '.$_POST['hoten'].'<br>';
	echo 'Số điện thoại: '.$_POST['sdt'].'<br>';
	echo 'Email: '.$_POST['email'].'<br>';
	echo 'Giới tính: '.$_POST['gt'].'<br>';
	echo 'Địa chỉ: '.$_POST['diachi'];
 ?>