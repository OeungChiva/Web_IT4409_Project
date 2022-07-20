<div class="clear"></div>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,500;1,300;1,400&family=Roboto&family=Roboto+Slab&display=swap" rel="stylesheet">
<style type="text/css">
    * { 
        border: 0;
        padding: 0px;
        box-sizing: border-box;
      }
    footer{
        background: #e74c3c;
        width: 100%;
        max-width: inherit;
        padding: 0;
        margin-bottom: 0;
        margin-top: 0;
        font-family: 'Roboto', sans-serif;
    
    }
    .footer {
      width: inherit;
      padding: 40px 0 10px 0;
      margin: 0;
     
    }
    .footer-container {
      max-width: 1000px;
      margin: auto;
      padding: 40px 0 20px;
      /*background-color: green;*/
    }
    .footer-row {
      display: flex;
      flex-wrap: wrap;
    }
    .footer-col {
      width: 33%;
      padding: 0 25px;
    }
    .footer-col ul {
        list-style: none;
        color: whitesmoke;
        font-family: 'Poppins', sans-serif;
    }          
    .footer-col h2{
        font-size: 18px;
        text-transform: capitalize;
        margin-bottom: 30px;
        color: white;
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
        position: relative;
    }
    /* insert content underline before h4 */
    .footer-col h2::before{
        content: "";
        position: absolute;
        left: 0;
        bottom: -10px;
        background-color: black;
        height: 2px;
        width: 50px;
        box-sizing: border-box;

    }
     /* margin for li but not for the last tag inside ul */
    .footer-col ul li:not(:last-child){
        margin-bottom: 15px;
    }

    .footer-col ul li a{
        font-size: 16px;
        text-transform: capitalize;
        color: whitesmoke;
        text-decoration: none;
        font-weight: 400;
        display: block;
        font-family: 'Roboto', sans-serif;
    }
    .footer-col ul li a:hover {
        color: black;
        padding-left: 10px;
    }
    .footer-col .social-link a{
        display: inline-block;
        height: 40px;
        width: 40px;
        line-height: 40px;
        background-color: whitesmoke;
        margin: 0 10px 10px 0;
        text-align: center;
        border-radius: 50%;
        color: #e74c3c;
        transition: all 0.5s ease;
    }
    .footer-col .social-link a:hover{
        color: royalblue;
        background-color: white;
    }

    /*----Responsive ----*/
    @media (max-width: 1000px) {
        .footer-col{
            width: 50%;
            }
        }
        footer {
          height: 400px;
        }
    @media (max-width: 700px) {
        .footer-col{
            width: 50%;
            }
        }
        footer {
          height: 500px;
        }
    @media(max-width: 500px) {
        .footer-col{
            width: 100%;  
        }
        footer {
          height: 750px;
        }
    }
    .footer h3{
        text-align: center;
        color: white;
        margin-top: 5px;
        margin-bottom: 5px;
        font-size: 45px;
        font-family: 'Lobster', cursive;
        text-transform: initial;
    }
    .footer h5{    
        text-align: center;
        font-size: 12px;
        font-family: 'Roboto', sans-serif;
        color: white;
        padding: 20px 0 10px 0;
        
    }
</style>
<footer>
    <div class="footer">
        <h3>Sport Accessories</h3>
        <div class="footer-container">
            <div class="footer-row">
                <div class="footer-col">
                    <h2>Danh Muc</h2>
                    <ul>
                        <li><a href="index.php?quanly=danhmuclist&id=7">Football</a></li>
                        <li><a href="index.php?quanly=danhmuclist&id=9">Vollleyball</a></li>
                        <li><a href="index.php?quanly=danhmuclist&id=10">Basketball</a></li>
                        <li><a href="index.php?quanly=danhmuclist&id=6">Tenis</a></li>
                        <li><a href="index.php?quanly=danhmuclist&id=5">Swimming</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h2>Lien He</h2>
                    <ul>
                        <li>
                            <a href="https://goo.gl/maps/7VKuT4GTHWQfequTA"><i class="fa fa-map-marker"></i> : 23 Ta Quang Buu, Ha Noi</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-phone"></i> : +885 85858585</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-envelope"></i> : sportaccessories@hust.com</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h2>Mang Xa Hoi​</h2>
                    <div class="social-link">
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-instagram"></i></a>
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <h5><i class="fa fa-copyright"></i>2022 Shop Accessories</h5>
  </div>
</footer>
