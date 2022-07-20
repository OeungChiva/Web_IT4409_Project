<section class="banner" style="background: url('images/banner.jpg');background-size: cover;height: 500px;"></section>
<div class="new_product">
   <h2>Chi tiết sản phẩm</h2>
</div>
<style>
   
   .product_detail-container {
      border: 2px solid #e74c3c;
      background-color: white;
      margin: 40px;
      height: auto;
      width: 50%;
      margin-left: 25%;
      padding: 10px 10px;
      min-width: 270px;
   }
   .product_detail-container-row {
      display: flex;
      flex-wrap: wrap;
      
   }
   .product_detail-container-col-1 {
      width: 240px;
      height: 240px;
      padding: 10px;
      /*background-color: green;*/
   }
   .product_detail-container-col-1 img{
      width: 220px;
      height: 220px;
   }
   .product_detail-container-col-2{
      padding: 20px 40px;
   }
   .product_detail-container-col-2 h2{
      font-size: 18px;
      text-transform: capitalize;
      margin-bottom: 30px;
      color: black;
      font-family: 'Poppins', sans-serif;
      font-weight: 500;
   }

   .product_detail-container-col-2 .detail ul li{
      padding: 1px;
      /*list-style: none;*/
   }
   /*
   .product_detail-container-col-2 .detail ul li::before {
      content: "\2022";
      color: red;
      font-weight: bold;
      display: inline-block; 
      width: 1em;
      margin-left: -1em;
   }
   */
   .product_detail-container-col-2 .detail ul li input{
      cursor: pointer;
      color: white;
      background-color: #e74c3c;
      font-size: 16px;
      margin-top: 5px;
      padding: 5px 15px;
      border-radius: 25px;
      text-align: center;
   }
   .product_detail-container-col-2 .detail ul li:hover input{
      background-color: #1ed760;
      color: black;
   }
</style>
<?php
    $sql_chitiet ="SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc  AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
    $query_chitiet=mysqli_query($connect,$sql_chitiet);
    while ($row_chitiet=mysqli_fetch_array($query_chitiet)){
?>
<div class="product_detail-container">
   <div class="product_detail-container-row">
      <div class="product_detail-container-col-1">
         <img src="admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh']?>">
      </div>
      <div class="product_detail-container-col-2">
         <form action="pages/main/giohang/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>" method="POST">
            <h2 style="margin: 0;"><?php echo $row_chitiet['tensanpham'] ?></h2>
            <div class="detail">
               <ul>
                  <li>Mã : <?php echo $row_chitiet['masanpham'] ?></li>
                  <li>Giá : <?php echo number_format($row_chitiet['giasanpham'],0,',','.').'vnd' ?></li>
                  <li>Số lượng : <?php echo $row_chitiet['soluong'] ?></li>
                  <li>Danh mục : <?php echo $row_chitiet['tendanhmuc'] ?></li>
                  <li>Description: 
                     <ul style="list-style: none;">
                        <li style="margin-left: 10px;"><?php echo $row_chitiet['tomtat']?></li>
                     </ul>                 
                  </li>
                  <li style="text-align: center; list-style: none;"><input  type="submit" name="themgiohang" value="Thêm Giỏ Hàng"></li>
               </ul>
            </div>
      </form>
      </div>
   </div>  
</div>
<?php
    }
 ?>