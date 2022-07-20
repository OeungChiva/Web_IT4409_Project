<div class="container">
 <?php
    if(isset($_SESSION['id_khachhang'])){
?>
    <div class="arrow-steps clearfix" style="margin-left: 20px">
        <div class="step "> <span> <a href="../../../index.php?quanly=giohang" >Giỏ hàng</a></span> </div>
         <div class="step"> <span><a href="index.php?quanly=vanchuyen" >Kiểm tra</a></span> </div>
        <div class="step current"> <span><a href="index.php?quanly=thongtinthanhtoan" >Thanh toán</a><span> </div>
       
    </div>
    <?php
  } 
  ?>
   	<style type="text/css">
  	.tbl_thanhtoan {
    border-collapse: collapse;
    width: 125%;
    margin: 10px 20px;
}
   .tbl_thanhtoan th, td{
    border: 1px solid #bbbbbb;
    padding: 8px;
    text-align: center;
}
   .tbl_thanhtoan th{
    padding-top: 12px;
    padding-bottom: 12px;
    
    background-color: #e74c3c;
    color: white;
    text-align: center;
}
    .tbl_thanhtoan tr:nth-child(even){background-color: #f2f2f2;}

    .tbl_thanhtoan tr:hover {background-color: #ddd;}
    a.delete{
    text-decoration: none;
    background-color: red;
    color: black;
    border: 0 solid;
    cursor: pointer;
    border-radius: 3px;
    padding: 2px 5px;
    text-align: center;
    font-size: 15px;
}
  	</style>
  	<form action="thanhtoan.php" method="POST">
	<div class="row">
  		<h3>Giỏ hàng của bạn</h3>
  	<table class="tbl_thanhtoan">
		<tr>
        <th>ID</th>
        <th>Mã </th>
        <th>Tên</th>
        <th>Hình</th>
        <th>Số lượng</th>
        <th>Giá</th>
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
            <!-- ở đây lấy dữ liêu cart_item['masp'] từ themgiohang.php -->
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
            <td><a class="delete" href="pages/main/giohang/xoasanpham.php?xoa=<?php echo $cart_item['id'] ?>" class="btn btn-success">XÓA</a></td>
        </tr>


    <?php 
            }
    ?>

        <tr>
            <td colspan="8">
                <p style="float: left text-align: center;" class="btn btn-success"> Tổng tiền : <?php echo number_format($tongtien,0,',','.') . ' VNĐ'  ?></p>
                <p style="float: right;"><a href="pages/main/giohang/xoahetgiohang.php?xoatatca=xoahet" class="delete">Xóa Hết</a></p>
                <div style="clear:both;"> </div>
		    </td>
		  </tr>
		  <?php	
		  }else{ 
		  ?>
		   <tr>
		    <td colspan="8"><p>Hiện tại giỏ hàng trống</p></td>
		   
		  </tr>
		  <?php
		  } 
		  ?>
		 
	</table>
  	</div>
  	<style type="text/css">
  		.col-md-4.hinhthucthanhtoan .form-check {
		    margin: 11px;
		}
		button.btn-booking{
    		text-decoration: none;
    		background-color: #e74c3c ;
    		color: white;
    		border: 0 solid;
    		cursor: pointer;
    		border-radius: 25px;
    		padding: 10px 15px;
    		text-align: center;
    		width: 150px;
    		margin-left: 20px;
		}
    	button.btn-booking:hover{
       		background-color: #1ed760;
        	color: black;
		}
		h3 {
    		border-left: 5px solid  #e74c3c;
    		width: fit-content;
    		padding: 10px;
    		margin-left: 20px;
		}
  	</style>

  	<div class="col-md-4 hinhthucthanhtoan">
  		<h3>Phương thức thanh toán</h3>
  		<div class="form-check">
		  <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="Tiền Mặt" checked>
		  <label class="form-check-label" for="exampleRadios1">
		    Tiền mặt
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="Chuyển Khoảng">
		  <label class="form-check-label" for="exampleRadios2">
		    Chuyển khoản
		  </label>
		</div>
		<button type="submit" onclick="datthanhcong()" value="Thanh toán ngay" name="redirect"  class="btn-booking">Thanh toán ngay</button>

		<script>
			function datthanhcong() {
  			alert("Bạn đã đặt hàng thành công! Cảm ơn bạn đã tin tưởng shop bên mình!");
			}
		</script>
		
		</form>

		<p></p>
	
		<?php
		$tongtien = 0;
		foreach($_SESSION['cart'] as $key => $value){
			$thanhtien = $value['soluong']*$value['giasanpham'];
  			$tongtien+=$thanhtien;
		} 
		$tongtien_vnd = $tongtien;
		$tongtien_usd = round($tongtien/22667);
		?>
		<input type="hidden" name="" value="<?php echo $tongtien_usd ?>" id="tongtien">
		

		 </div>
		 	
		 </div>
<?php
	

?>