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

    if($_GET["order"] != 1 || empty($_SESSION['userId'])){
      die;
    }
    $userId = $_SESSION['userId'];
    mysqli_query($conn, "INSERT INTO `order` SELECT * FROM cart WHERE `userid`='$userId'") or die(mysqli_error($conn));
    mysqli_query($conn, "DELETE FROM `cart` WHERE `userid`='$userId'");
    ?>
    <!-- end header section -->
  </div>



  <!-- thank you section -->
  <section class="thanks_section layout_padding">
    <div class="thankyoucontent">
      <div class="wrapper-1">
        <div class="wrapper-2">
          <!-- <h1>Thank you!</h1> -->
          <h1>
            <img
              src="http://montco.happeningmag.com/wp-content/uploads/2014/11/thankyou.png"
              alt="thanks"
            />
          </h1>
          <p>for placing your order</p>
          <p>From Pharmacy Agency</p>
          <a href="tracking.php">Track your order here</a>
        </div>
        <div class="footer-like">
          <p></p>
        </div>
      </div>
    </div>
  </section>

  <!-- end thank you section -->

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