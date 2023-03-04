<?php
session_start();
include 'connect.php';
if(!isset($_SESSION['phoneno'])){
  echo "<script> alert('Please login');window.location='../../login/login.php';</script>";
}else $ph=$_SESSION['phoneno'];
$e="SELECT * FROM `customer2` where phoneno=$ph AND user=''";
$se=mysqli_query($conn,$e);
$ee=mysqli_fetch_array($se);
if(!$ee){
  echo "<script> alert('Please login');window.location='../../login/login.php';</script>";
}
include 'header1.php';
?>
<!DOCTYPE html>

<html lang="en">
  

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>THOLANIKUNNEL FURNITURE</title><link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CLibre+Baskerville:400,700" rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/furniture-icon/style.css">
    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugins/lightGallery-master/dist/css/lightgallery.min.css">
    <link rel="stylesheet" href="css/style.css">
   
  </head>
  <?php
  include 'connect.php';

  ?>
 
  <body>
  <?php
  
   ?>
    <div class="header--sidebar"></div>
    <!--  Header-->
   
    <div class="ps-hero bg--cover" data-background="images/hero/bread-1.jpg">
      <div class="ps-container">
        <h3>Shop Page</h3>
        <div class="ps-breadcrumb">
          <ol class="breadcrumb">
            <li><a href="index-2.php">Home</a></li>
            <li class="active">Shop Page</li>
          </ol>
        </div>
      </div>
    </div>
    <main class="ps-main">
      <div class="ps-container">
        <div class="ps-filter">
          <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ">
                  <div class="ps-filter__trigger">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 "><span></span></div>
                    
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                  <div class="ps-filter__result">
                    <?php
                    if(isset($_POST['submit']))
                    {
                        $proname=$_POST['proname'];
$sql = "SELECT * FROM `products` where pname like '%$proname%'";
$result = mysqli_query($conn, $sql);
$r=mysqli_num_rows($result);
if($r>0){
                    ?>
                    <p>Showing <?php echo $r ?> of <?php echo $r ?> results</p>
                  </div>
                </div>
          </div>
          
        </div>
      </div>
      <form >
        <?php


while ($rows = mysqli_fetch_array($result)) {
  
?>
        <div class="col">
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
                <div class="ps-product">
                  <div class="ps-product__thumbnail">
                   
                    
                    <img src="../tholanikunnel/Admin/<?php echo $rows['pimage'] ; ?>"  width = "200px" height="200px" alt=""><a class="ps-product__overlay" href="product_details.php?id=<?php echo $rows['pid']?>"></a>
                    
                    <div class="ps-product__content full">
                          <a class="ps-product__title" href="product_details.php?id=<?php echo $rows['pid']?>"><?php echo $rows['pname'] ?></a>
                      <div class="ps-product__categories"><a href="product-listing.html"><?//php echo $rows['Cat_name'] ?></a></div>
                      <p class="ps-product__price">
                      ₹<?php echo $rows['price'] ?>
                      <div> <?php
                if($rows['stock']<=0)
                {
                    echo "<h4 style='color:red;'>Out of Stock</h4>";
                }
                else{
                    echo "<h4 style='color:green'>In Stock</h4>";
                }
                ?></div>
                      </p><a class="ps-btn ps-btn--sm" href="product_details.php?id=<?php echo $rows['pid']?>">Add to cart</a>
                      
                    </div>
                  </div>
                  <div class="ps-product__content">
                      <a class="ps-product__title" href="product-detail-2.html"><?php echo $rows['pname'] ?></a>
                    
                    <p class="ps-product__price">
                    ₹<?php echo $rows['price'] ?>
                    </p>
                  </div>
                </div>
              </div>
        </div>
      </div>
      <?php
   
    }
}
else                
 { ?>
 <h2 style="text-align:center">
 <?php
    echo "Sorry,No Products Found";
  }
}
?>


</form>


</main>
</div>
</div>
</div>
</div>
</div>
      <div class="ps-pagination">
        
      </div>
   
    
      </div>
    </div>
   <?php
include 'footer.php';
   ?>
    <div class="ps-loading"><div class="loader ">
<div class="loader__item"></div>
<div class="loader__item"></div>
<div class="loader__item"></div>
<div class="loader__item"></div>
<div class="loader__item"></div>
</div>
    </div>
    <script src="plugins/jquery.min.js"></script>
    <script src="plugins/lightGallery-master/dist/js/lightgallery-all.min.js"></script>
    <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="plugins/imagesloaded.pkgd.js"></script>
    <script src="plugins/masonry.pkgd.min.js"></script>
    <script src="plugins/isotope.pkgd.min.js"></script>
    <script src="plugins/slick/slick/slick.min.js"></script>
    <script src="plugins/jquery.matchHeight-min.js"></script>
    <script src="plugins/elevatezoom/jquery.elevatezoom.js"></script>
    <script src="plugins/gmap3.min.js"></script>
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Custom scripts-->
    <script src="js/main.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsUcTjt43mTheN9ruCsQVgBE-wgN6_AfY&amp;region=GB"></script>
  </body>
  

</html>