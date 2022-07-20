<?php
	session_start();
	include('../../../admin/config/connect.php');
	//require('../../mail/sendmail.php');
	require('../../../carbon/autoload.php');
	use Carbon\Carbon;
    use Carbon\CarbonInterval;
    
	$now = Carbon::now('Asia/Ho_Chi_Minh');
	if(isset($_POST['redirect'])){
	$id_khachhang = $_SESSION['id_khachhang'];
	$code_order = rand(0,9999);// random tuwf 0 den 4 so
	$cart_pay=$_POST['payment'];
	$insert_cart = "INSERT INTO tbl_giohang(id_khachhang,code_cart,cart_status,cart_date,cart_payment) VALUE('".$id_khachhang."','".$code_order."',1,'".$now."','".$cart_pay."')";
	$cart_query = mysqli_query($connect,$insert_cart);
	if($cart_query){
		//thêm giỏ hàng chi tiết
		foreach($_SESSION['cart'] as $key => $value){
			$id_sanpham=$value['id'];
			$soluong=$value['soluong'];
			
			$insert_order_detail = "INSERT INTO tbl_cart_detail(id_sanpham,code_cart,soluongmua) VALUE('".$id_sanpham."','".$code_order."','".$soluong."')";
			mysqli_query($connect,$insert_order_detail);
		}
	}
	header('Location:../../../index.php');
	}
?>