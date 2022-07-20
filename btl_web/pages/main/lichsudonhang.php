<section class="banner" style="background: url('images/banner.jpg');
    background-size: cover;
    height: 500px;"></section>

<div class="new_product">
 <h2>Lịch sử đơn hàng </h2>
</div>
<?php
	$id_khachhang = $_SESSION['id_khachhang'];
	$sql_lietke_dh = "SELECT * FROM tbl_giohang,tbl_dangky WHERE tbl_giohang.id_khachhang=tbl_dangky.id_khachhang AND tbl_giohang.id_khachhang='$id_khachhang' ORDER BY tbl_giohang.id_cart DESC";
	$query_lietke_dh = mysqli_query($connect,$sql_lietke_dh);
?>
<table class="product_list_lichsu">
  <tr>
  	<th>Id</th>
    <th>Mã đơn hàng</th>
    <th>Tên khách hàng</th>
    <th>Địa chỉ</th>
    <th>Email</th>
    <th>Số điện thoại</th>
    <th>Hình thức thanh toán</th>
    <th>Ngày đặt</th> 
    <th>Quản lý</th>
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_dh)){
    $i++;
  ?>
  <tr>
    <td><?php echo $i ?></td>
         <td><?php echo $row['code_cart'] ?></td>
         <td><?php echo $row['hovaten']?></td>
         <td><?php echo $row['diachi']?></td>
         <td><?php echo $row['email']?></td>
         <td><?php echo $row['sodienthoai']?></td>
         <td><?php echo $row['cart_payment']?></td>
         <td><?php echo $row['cart_date'] ?></td>
    
    <td>
      <a href="index.php?action=quanlydonhang&query=xemdonhang&code=<?php echo $row['code_cart']?>">Xem đơn hàng</a>  
    </td>
<?php
    }
    ?>
 </table>
