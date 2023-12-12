<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>MEDI VERSE</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700|Roboto:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <?php 

    session_start();
    include("config/dbconnect.php");
    include("header.php");


        ?>
    <!-- end header section -->
  </div>



  <!-- cart section -->
  <section class="cart_section layout_padding2">
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <div class="container bootstrap snippets bootdey">
    <div class="col-md-12 col-sm-8 content">
    <?php

                              
$userId = $_SESSION['userId'];

    $query = mysqli_query($conn, "SELECT * FROM cart WHERE `userid`='$userId' order by id desc");
    if(mysqli_num_rows($query) > 0){

    ?>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-info panel-shadow">
                    <div class="panel-heading">
                        <h3>
                            Medicine Details
                        </h3>
                    </div>
                    
                    <div class="panel-body"> 
                        <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Product</th>
                                <th>Description</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                              
    
                <?php
                $ctr = 0;
                while($result = mysqli_fetch_assoc($query)){	
                  $getproduct =  mysqli_query($conn, "SELECT * FROM product WHERE `id`='$result[productid]' order by id desc");
                  $fproduct = mysqli_fetch_assoc($getproduct);
                  $amt = $result['qty'] * $fproduct['rate'];
      
                              ?>
                                <tr>
                                    <td><img src="<?=$fproduct['img_url']?>" class="img-cart" style="width:150px; height:100px"></td>
                                    <td><strong><?=$fproduct['name']?></strong></td>
                                    <td><?=$result['qty']?></td>
                                    <td><?=$fproduct['rate']?></td>
                                    <td><i class="fa fa-gbp" aria-hidden="true"></i><?= $amt?></td>
                                </tr>
                                <?php

                                $total = $total + $amt;
                }  
                              ?>

                                <tr>
                                    <td colspan="4" class="text-right"><strong>Total</strong></td>
                                    <td><i class="fa fa-gbp" aria-hidden="true"></i><?= $total?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
                <a href="buy.php" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Continue Shopping</a>
                <a href="thank.php?order=1" class="btn btn-primary pull-right">Place Order<span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <?php
      }else{
        echo '<h3 style="text-align:center; margin-top: 100px; margin-bottom: 100px;">Your Cart is Empty<i class="fa fa-frown-o" aria-hidden="true"></i></h3>g ';
      }
    ?>
    </div>
</div>
  </section>

  <!-- end cart section -->

<?php     include("footer.php");
?>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
  </script>
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: [],
      autoplay: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    });
  </script>
  <script type="text/javascript">
    $(".owl-2").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: [],
      autoplay: true,

      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    });
  </script>
</body>

</html>