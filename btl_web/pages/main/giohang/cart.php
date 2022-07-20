<section class="banner" style="background: url('images/banner.jpg');
    background-size: cover;
    height: 500px;"></section>
<div style="clear:both;"></div>
<div class="new_product">
    <h2>Giỏ hàng</h2>
</div>
<div style="height: auto;">     
    <br><h3><?php
        if(isset($_SESSION['dangky'])){
            echo '<h4 class="border-title">Taì Khoản : '.'<span style="color:red">'.$_SESSION['dangky'].'</span>'.'</h4>';
        } 
        ?>
    </h3>
    <?php
        if(isset($_SESSION['cart'])){         
            
        }
    ?>
    <table class="product_list_giohang">
        <tr>
            <th>ID</th>
            <th>Mã</th>
            <th>Tên</th>
            <th style="width: 220px;">Hình</th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th>Thành tiền</th>
            <th>Thay đổi</th>
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
            <td><img src="admin/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh'] ?>" width="100%" style="height:200px"></td>

            <td style="text-align:center;">
                <a href="pages/main/giohang/suasoluong.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-plus"></i></a>
                <?php echo $cart_item['soluong'] ?>
                <a href="pages/main/giohang/suasoluong.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-minus"></i></a>
            </td>
            <td><?php echo number_format($cart_item['giasanpham'],0,',','.') . ' VNĐ'?></td>
            <td><?php  echo number_format($thanhtien,0,',','.') . ' VNĐ' ?></td>
            <td><a class="delete" href="pages/main/giohang/xoasanpham.php?xoa=<?php echo $cart_item['id'] ?>">XÓA</a></td>
        </tr>
        
        <?php 
            }
        ?>

        <tr>
            <td colspan="8">
                <h3 style="float: left; color:red;"> Tổng tiền : <?php echo number_format($tongtien,0,',','.') . ' VNĐ'  ?></h3>
                <p style="float: right;margin-right:15px"><a class="delete" href="pages/main/giohang/xoahetgiohang.php?xoatatca=xoahet">Xóa Hêt</a></p>
                <div style="clear:both;"></div>
                    <?php
                        if(isset($_SESSION['dangky'])){                     
                    ?>
                        <h3><a class="booking" href="pages/main/thanhtoan/index.php?quanly=vanchuyen">Đặt hàng</a></h3>
                    <?php
                        }else{              
                    ?>
                        <h3><a class="booking" href="index.php?quanly=dangnhap">Đăng nhập đặt hàng</a></h3>
                    <?php
                        }
                    ?>              
            </td>
        </tr>
        <?php        
            }else{   
        ?>
        <tr>
            <td colspan="8">Hiện tại giỏ hàng trông</td>
        </tr>
        <?php
            }
        ?>
    </table>
</div> 