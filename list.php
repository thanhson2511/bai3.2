<?php 
	session_start();
	if (isset($_Session['info'])) {
		$data = $_Session['info'];
	}else{
		$data = array();
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	<form method="POST" action="them.php">
		<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Mã sinh viên</th>
	      <th scope="col">Tên</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <?php 
	  	$i=0;
	  	foreach ($data as $value) {
	  		$i++;	
	  	
	   ?>
	  <tr>
	  	<td><?php echo $i; ?></td>
	  	<td><?php echo $value['msv']; ?></td>
	  	<td><?php echo $value['hoten']; ?></td>
	  	<td>
	  		<a href="detail.php?code=<?php echo $value['msv']; ?>" class="btn btn-success">Detail</a>
	  		<a href="delete.php?code=<?php echo $value['msv']; ?>" class="btn btn-success">delete</a>
	  	</td>
	  </tr>
	<?php } ?>
	</table>
	</form>
</body>
</html>