<div class="main">     
    <div class="maincontent">
        <?php //lấy qiamly từ menu truyền vào bằng phuongư thức GET
            if(isset($_GET['quanly'])){
                $bientam=$_GET['quanly'];
            }else{
                $bientam="";
            }
            if ($bientam=='danhmuclist'){
                include("main/danhmuc.php");
            }elseif ($bientam=='giohang'){ 
                include("main/giohang/cart.php");
            }elseif ($bientam=='dangky'){ 
                include("main/dangky.php");
            }elseif ($bientam=='contact'){ 
                include("main/contact.php");
            }elseif ($bientam=='sanpham'){ 
                include("main/sanpham.php");     
            }elseif ($bientam=='dangnhap'){ 
                include("main/dangnhap.php");
            }elseif ($bientam=='thongtin'){ 
                include("main/thongtin.php");
            }elseif ($bientam=='timkiem'){ 
                include("main/timkiem.php");
            }elseif($bientam=='lichsudonhang'){
                include("main/lichsudonhang.php");
            }elseif($bientam=='xemdonhang'){
                include("main/xemdonhang.php");
            }else{ ?>

            <section class="banner" style="background: url('images/banner.jpg');background-size: cover;height: 500px;"></section>
        <?php
            }
        ?>     
    </div>
</div>



