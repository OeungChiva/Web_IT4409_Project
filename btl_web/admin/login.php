<?php
	session_start();
	include('config/connect.php');
	if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['username'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
		$row = mysqli_query($connect,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$_SESSION['dangnhap'] = $taikhoan;
			header("Location:index.php");
		}else{
			echo '<p class="alert">Tài khoản hoặc Mật khẩu không đúng,vui lòng nhập lại !</p>';
			header("Location:login.php");
		}
	} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng nhập Admin</title>
	<style type="text/css">
		body{
			background:#f2f2f2;
			
		}
				/*---------------- Dang Nhap--------------------*/
		form {
			border: 0px solid orange;
			
		}

		input[type=text], input[type=password] {
			width: 30%;
			padding: 12px 20px;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
			margin: 16px 35%;
			border-radius: 5px;
		}

		button{
			background-color: #e74c3c;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 30%;
			margin: 16px 35%;
			border-radius: 25px;
			font-family: 'Roboto', sans-serif;
		}
		label {
			width: 30%;
			margin: 16px 35%;
		}
		button:hover {
			background-color: #1ed760;
			color: black;
			
		}
		.container {
			padding: 16px;
		}

		span.psw {
			float: right;
			padding-top: 16px;
		}
		.uname {
			float: right;
			padding-top: 16px;
		}
		/* Change styles for span and cancel button on extra small screens */
		@media screen and (max-width: 300px) {
			span.psw {
				display: block;
				float: none;
			}
		
		}
		h3{
			color: #e74c3c;
			text-align:center;
			font-family: 'Roboto', sans-serif;
		}
		b{
			font-family: 'Roboto', sans-serif;
		}
		p.alert{
			background-color: red;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			width: 30%;
			margin: 16px 35%;
			border-radius: 25px;
			text-align: center;
            font-family: 'Roboto', sans-serif;
			font-size: 18px;
			text-transform: capitalize;
		}
	</style>
</head>
<body>
<h3>Đăng nhập Admin</h3>
	<form action="" method="post">
		<div class="container">
			<label for="uname"><b>Tài khoản</b></label>
			<input type="text" placeholder="Enter Username" name="username" required>

			<label for="psw"><b>Mật khẩu</b></label>
			<input type="password" placeholder="Enter Password" name="password" required>
			<button type="submit" name="dangnhap">ĐĂNG NHẬP</button>
		</div>
	</form>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
