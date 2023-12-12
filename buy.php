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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<script>

  $(document).ready(function(){

    $("body").on("click", ".seemore", getMedProduct);
    $("body").on("click", ".addtocart", addToCart);

function addToCart(){
  var productId = $(this).attr("data-productid");

  $.get('addtocart.php', {productId: productId, qty: 1}, function (data) {
        if (data == true) {
            alert('Medicine Added to Cart Successfully');
            window.location.href = 'cart.php';
        }else if (data == 22){
          alert('Please Login First');
          window.location.href = 'login.php';
          return;
        }else{
          alert('Something Went Wrong, Please Login First');
          window.location.href = 'login.php';
          return;
        }
    });
  }




  getMedProduct();
  function getMedProduct(){

    var getUrlParameter = function getUrlParameter(sParam) {
            var sPageURL = window.location.search.substring(1),
                    sURLVariables = sPageURL.split('&'),
                    sParameterName,
                    i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
                }
            }
        };

    var search = getUrlParameter('search');
    var page = $(".prodlistpg").val();
    var manufacturer = $(".prodlistpg").val();



    $.get('prodlist.php', {page: page, name:'name', search: search, manufacturer: manufacturer}, function (data) {
            if (data != '') {
                $(".prodlist").append(data);
                $(".prodlistpg").val(parseInt(page) + 1);
            }
        });
  }
})

</script>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <?php 
    error_reporting(0);
    session_start();
    include("config/dbconnect.php");
    include("header.php");
        ?>
    <!-- end header section -->
  </div>




  <style>
  .w-100{
    width: 100% !important;
  }
  .w-80{
    width: 80% !important!;
  }
  .w-20{
    width: 20% !important;
  }

</style>
  <!-- health section -->

  <section class="health_section layout_padding">
  <div class="custom_heading-container" style="marign-left: 10px">
        <h2>
          Medicine & Health
        </h2>
      </div>
    <div class="row prodlist" style="margin-left: 10px !important">
  
    </div>
    <div class="d-flex justify-content-center">
      <a href="#" class="seemore" >
        See more
        <input type="hidden" value="0"  class="prodlistpg">
      </a>
    </div>
    
</section>
  <!-- end health section -->



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