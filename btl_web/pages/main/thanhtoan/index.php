<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/style_cart.css">
    <link rel="stylesheet" href="../../../css/style_bill.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Thanh Toán</title>
    <style type="text/css">
        /******header-thanhtoan*****/
    .thanhtoan-header{
        background-color: #e74c3c;
        border: 1px solid #e74c3c;
        color: white;
        margin-bottom: 5px;
        width: 100%;
        font-family: 'Roboto Slab', serif     
    }
    .thanhtoan-header h2{
        text-align: center;
        color: white;
    }
    h3.taikhoan {
    	border-left: 5px solid  #e74c3c;
    	width: fit-content;
    	padding: 10px;
    	margin-left: 25px;
	}
    </style>
</head>
<body>

    <div class="thanhtoan-header">
    <h2>Trang thanh toán</h2>
    </div>
    <?php
        session_start();
        include "../../../admin/config/connect.php";

        if(isset($_SESSION['dangky'])){
            echo '<h3 class="taikhoan">Tài Khoản: '.'<span style="color:red">'.$_SESSION['dangky'].'</span></h3>';  
    ?>
    <?php
        include("mainthanhtoan.php");
    ?>
</body>
<script type="text/javascript" src="../../../js/modal.js"></script>
</html>
<?php

    }
?>