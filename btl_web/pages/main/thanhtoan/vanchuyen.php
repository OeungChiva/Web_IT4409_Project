<div class="container">
        <div class="arrow-steps clearfix" style="margin-left:20px">
            <div class="step "> <span> <a href="../../../index.php?quanly=giohang" >Giỏ hàng</a></span> </div>
            <div class="step current"> <span><a href="index.php?quanly=vanchuyen" >Kiểm tra </a></span> </div>
            <div class="step"> <span><a href="index.php?quanly=thongtinthanhtoan" >Thanh toán</a><span> </div>
            
        </div>
<style type="text/css">
    .tbl_vanchuyen {
    border-collapse: collapse;
    width: 125%;
    margin: 10px 20px;
}
   .tbl_vanchuyen th, td{
    border: 1px solid #bbbbbb;
    padding: 8px;
    text-align: center;
}
   .tbl_vanchuyen th{
    padding-top: 12px;
    padding-bottom: 12px;
    background-color: #e74c3c;
    color: white;
    text-align: center;
}
    .tbl_vanchuyen tr:nth-child(even){background-color: #f2f2f2;}

    .tbl_vanchuyen tr:hover {background-color: #ddd;}

    h3 {
    border-left: 5px solid  #e74c3c;
    width: fit-content;
    padding: 10px;
    margin-left: 20px;
}

    a.btn-booking{
    text-decoration: none;
    background-color:  #e74c3c ;
    color: white;
    border: 0 solid;
    cursor: pointer;
    border-radius: 25px;
    padding: 10px 15px;
    text-align: center;
    width: 150px;
    margin-left: 20px;
}
    a.btn-booking:hover{
        background-color: #1ed760;
        color: black;
}

a.delete{
    text-decoration: none;
    background-color: red;
    color: white;
    border: 0 solid;
    cursor: pointer;
    border-radius: 3px;
    padding: 2px 5px;
    text-align: center;
    font-size: 15px;
}

</style>

<h3>Thông tin vận chuyển</h3>
<?php
 	$id_dangky = $_SESSION['id_khachhang'];
 	$sql_get_vanchuyen = mysqli_query($connect,"SELECT * FROM tbl_dangky WHERE id_khachhang='$id_dangky' LIMIT 1");
	
 	if($id_dangky!=''){
 		$row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
 		$name = $row_get_vanchuyen['hovaten'];
 		$phone = $row_get_vanchuyen['sodienthoai'];
 		$address = $row_get_vanchuyen['diachi'];
 		$note = $row_get_vanchuyen['email'];
 	}else{
		 
 		$name = '';
 		$phone = '';
 		$address = '';
 		$note = '';
 	}
 	?>
 		
<div class="col-md-8">
  		
  		<ul>
  			<li>Họ và tên vận chuyển : <b><?php echo $name ?></b></li>
  			<li>Số điện thoại : <b><?php echo $phone ?></b></li>
  			<li>Địa chỉ : <b><?php echo $address ?></b></li>
  			<li>Email : <b><?php echo $note ?></b></li>
  		</ul>
<h3>Nếu bạn muốn đổi địa chỉ tài khoản hãy liên hệ shop ở phần Contact nhé</h3>
	<!--GIO HANG---->
    <table class="tbl_vanchuyen">
        <tr>
            <th>ID</th>
            <th>Mã </th>
            <th>Tên</th>
            <th>Hình</th>
            <th>Số lượng</th>
            <th>Giá </th>
            <th>Thành tiền</th>
            <th></th>
        </tr>
    <?php
        if(isset($_SESSION['cart'])){
            $i=0;
            $tongtien=0;
            foreach($_SESSION['cart'] as $cart_item){
                $thanhtien = $cart_item['soluong'] * $cart_item['giasanpham'];
                $tongtien+=$thanhtien;
                $i++;
    ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $cart_item['masp']?></td>
            <td><?php echo $cart_item['tensanpham'] ?></td>
            <td><img src="../../../admin/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh'] ?>" width="150px"></td>
            <td>
                <a href="pages/main/giohang/suasoluong.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-plus"></i></a>
                <?php echo $cart_item['soluong'] ?>
                <a href="pages/main/giohang/suasoluong.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-minus"></i></a>
            </td>
            <td><?php echo number_format($cart_item['giasanpham'],0,',','.') . ' VNĐ'?></td>
            <td><?php  echo number_format($thanhtien,0,',','.') . ' VNĐ' ?></td>
            <td><a href="pages/main/giohang/xoasanpham.php?xoa=<?php echo $cart_item['id'] ?>" class="delete">XÓA</a></td>
        </tr>

    <?php 
            }
    ?>

        <tr>
            <td colspan="8">
                <p style="float: left;"> Tổng tiền : <?php echo number_format($tongtien,0,',','.') . ' VNĐ'  ?></p>
                <p style="float: right;"><a href="pages/main/giohang/xoahetgiohang.php?xoatatca=xoahet" class="delete">Xóa Hết</a></p>
                <div style="clear: both;"> </div>

                    <?php
                            if(isset($_SESSION['dangky'])){
                                
                    ?>
                            <p style="text-align:center;"><a href="index.php?quanly=thongtinthanhtoan" class="btn-booking">Hình thức thanh toán</a></p>
                    <?php
                    }else{
                    
                    ?>
                         <p style="text-align:center;"><a class="btn-booking" href="index.php?quanly=dangky">Đăng kí đặt hàng</a></p>
                    <?php
                     }
                    ?>     
            </td>
        </tr>
    <?php   
        }else{ 
    ?>
        <tr>
            <td colspan="6">Hiện tại giỏ hàng trông</td>
        </tr>
    <?php
        }
    ?>
    </table>
</div>
</div>