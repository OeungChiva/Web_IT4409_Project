<section class="banner" style="background: url('images/banner.jpg');background-size: cover;height: 500px;"></section>
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Slab&display=swap" rel="stylesheet">
	
<style type="text/css">
		/*---------------- Dang Nhap--------------------*/
		.dangky form {
			border: 0px solid orange;
			background:#f2f2f2;
		}

		.dangky input[type=text], input[type=password] ,textarea{
			width: 30%;
			padding: 12px 20px;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
			margin: 16px 35%;
			border-radius: 5px;
            font-size: 16px
		}

		.dangky button{
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
		.dangky label {
			width: 30%;
			margin: 16px 35%;
		}
		.dangky button:hover {
			background-color: #1ed760;
			color: black;
			
		}
		.dangky .container {
			padding: 16px;
		}

		.dangky span.psw {
			float: right;
			padding-top: 16px;
		}
		.dangky .uname {
			float: right;
			padding-top: 16px;
            
		}
		.dangky a{
			color: #e74c3c;
		}
		.dangky a:hover{
			color: #1ed760;
		}	

		/* Change styles for span and cancel button on extra small screens */
		@media screen and (max-width: 300px) {
			.dangky span.psw {
				display: block;
				float: none;
			}
		
		}
		.dangky b{
            font-family: 'Roboto', sans-serif;
		}
		
		.dangky p.alert{
			background-color: #1ed760;
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

<!-- Navigation bar of Dang Ky -->
<div class="new_product">
      <h2>Đăng ký</h2>
</div>

<div class="dangky">
	<form action="" method="post">
		<div class="container">

			<label for="uname"><b>Họ và Tên</b></label>
			<input type="text" placeholder="Ho va Ten" name="hovaten" required>
			
			<label for="uname"><b>Tên Tài khoản</b></label>
			<input type="text" placeholder="Ten tai khoan" name="taikhoan">

			<label for="psw"><b>Mật khẩu</b></label>
			<input type="password" placeholder="Mau khau" name="matkhau" required>
			
			<label for="psw"><b>Nhập lại mật khẩu</b></label>	
			<input type="password" placeholder="Nhap lai mau khau" name="rematkhau" required>
			
			<label for="uname"><b>Email</b></label>
			<input type="text" placeholder="Email" name="email">

			<label for="uname"><b>Điện thoại</b></label>
			<input type="text" placeholder="Dien thoai" name="dienthoai">

			<label for="uname"><b>Địa chỉ</b></label>
			<textarea name="diachi"></textarea>

			<button class="dangky" type="submit"  name="dangky">ĐĂNG KÝ</button>

			<label for="uname"><b><a  href="index.php?quanly=dangnhap">Có tài khoản ? Đăng nhập.</a></b></label>
		</div>
	</form>
</div>
<div class="dangky">
<?php
	if(isset($_POST['dangky'])) {
		$tenkhachhang = $_POST['hovaten'];
		$taikhoan= $_POST['taikhoan'];
        $matkhau = md5($_POST['matkhau']);
        $rematkhau=  md5($_POST['rematkhau']);
		$email = $_POST['email'];
		$dienthoai = $_POST['dienthoai'];
		$diachi = $_POST['diachi'];
		if (!$tenkhachhang || !$taikhoan || !$matkhau || !$rematkhau || !$email || !$dienthoai || !$diachi)
		{
			echo '<p class="alert">Vui lòng nhập đầy đủ thông tin !</p>';
			
			
		}elseif($matkhau!=$rematkhau){
			echo '<p class="alert">Mật khẩu không chung nhau !</p>'; 

		}
		else{
	
			
			$sql_dangky = "INSERT INTO tbl_dangky(hovaten,taikhoan,matkhau,sodienthoai,email,diachi) VALUE('".$tenkhachhang."','".$taikhoan."','".$matkhau."','".$dienthoai."','".$email."','".$diachi."')";
			$query_dangky=mysqli_query($connect,$sql_dangky);
			if($query_dangky){
				echo '<p class="alert">Bạn đã đăng ký thành công !</p>';
				$_SESSION['dangky'] = $taikhoan;
				$_SESSION['email'] = $email;
				$_SESSION['id_khachhang'] = mysqli_insert_id($connect);
				
				}
			}
		}	
?>
</div>