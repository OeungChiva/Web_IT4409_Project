<div class="dangnhap">
<?php
	if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['taikhoan'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_dangky ,tbl_admin WHERE tbl_dangky.taikhoan='".$taikhoan."' AND tbl_dangky.matkhau='".$matkhau."'  LIMIT 1";
		$row = mysqli_query($connect,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$row_data = mysqli_fetch_array($row);
			$_SESSION['dangky'] = $row_data['taikhoan'];
			$_SESSION['email'] = $row_data['email'];
            $_SESSION['id_khachhang']= $row_data['id_khachhang'];
			header("Location:index.php");
		}elseif($taikhoan=='admin'){
            header("Location:admin/login.php");
        }else{
			echo '<label><p class="alert">Mật khẩu hoặc Email sai ,vui lòng nhập lại !</p></label>';
        }
	} 
?>
</div>
<section class="banner" style="background: url('images/banner.jpg');
    background-size: cover;
    height: 500px;"></section>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Slab&display=swap" rel="stylesheet">
    <title>Login</title>
    <style type="text/css">
		/*---------------- Dang Nhap--------------------*/
		.dangnhap form {
			border: 0px solid orange;
			background:#f2f2f2;
			
		}

		.dangnhap input[type=text], input[type=password] {
			width: 30%;
			padding: 12px 20px;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
			margin: 16px 35%;
			border-radius: 5px;
            font-size: 18px
		}

		.dangnhap button{
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
		.dangnhap label {
			width: 30%;
			margin: 16px 35%;
		}
		.dangnhap button:hover {
			background-color: #1ed760;
			color: black;
			
		}
		.dangnhap .container {
			padding: 16px;
		}

		.dangnhap span.psw {
			float: right;
			padding-top: 16px;
		}
		.dangnhap .uname {
			float: right;
			padding-top: 16px;
            
		}
        .dangnhap a{
            color: #e74c3c;
        }
        .dangnhap a:hover{
            color: #1ed760;
        }
		
		.dangnhap label p.alert{
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
			margin-top: 50px;
		}
		/* Change styles for span and cancel button on extra small screens */
		@media screen and (max-width: 300px) {
			.dangnhap span.psw {
				display: block;
				float: none;
			}
		
		}
		.dangnhap b{
            font-family: 'Roboto', sans-serif;
		}

	</style>
</head>
<body>
    <div class="new_product">
        <h2>Đăng nhập</h2>
    </div>
    <div class="dangnhap">
	    <form action="" method="post">
		    <div class="container">

			    <label for="uname"><b>Tài khoản</b></label>
			    <input type="text" placeholder="Ten tai khoan" name="taikhoan" required>

			    <label for="psw"><b>Mật khẩu</b></label>
			    <input type="password" placeholder="Mat khau" name="password" required>
			
                <button class="dangnhap"type="submit" name="dangnhap">ĐĂNG NHẬP</button>

                <label for="uname"><b><a href="#">Quên mật khẩu?</a></b></label>
            </div>
	    </form>
    </div>
</body>
</html>
