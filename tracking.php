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

  <style>


.card {
  position: relative;
  display: -webkit-box;display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-radius: 0.10rem
} 

.card-header:first-child {
  border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0
}

.card-header {
  padding: 0.75rem 1.25rem;
  margin-bottom: 0;
  background-color: #fff;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1)
}

.track {
  position: relative;
  background-color: #ddd;
  height: 7px;display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin-bottom: 60px;
  margin-top: 50px
}

.track .step {
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  width: 25%;
  margin-top: -18px;
  text-align: center;
  position: relative
}

.track .step.active:before {
  background: #10e7f4
}

.track .step::before {
  height: 7px;
  position: absolute;
  content: "";
  width: 100%;
  left: 0;
  top: 18px
}

.track .step.active .icon {
  background: #10e7f4
  color: #fff
}

.track .icon {
  display: inline-block;
  width: 40px;
  height: 40px;
  line-height: 40px;
  position: relative;
  border-radius: 100%;
  background: #ddd
}

.track .step.active .text {
  font-weight: 400;
  color: #000
}

.track .text {
  display: block;
  margin-top: 7px
}

.itemside {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  width: 100%
}

.itemside .aside {
  position: relative;
  -ms-flex-negative: 0;
  flex-shrink: 0
}

.img-sm {
  width: 80px;
  height: 80px;
  padding: 7px
}

ul.row, ul.row-sm {
  list-style: none;
  padding: 0
}

.itemside .info {
  padding-left: 15px;
  padding-right: 7px
}

.itemside .title {
  display: block;
  margin-bottom: 5px;
  color: #212529
}

p{margin-top: 0;margin-bottom: 1rem}

.btn-warning {
  color: #ffffff;
  background-color: #10e7f4;
  border-color: #10e7f4;
  border-radius: 1px
}

.btn-warning:hover {
  color: #ffffff;
  background-color: #10e7f4;
  border-color: #10e7f4;
  border-radius: 1px
}

  </style>
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



  <!-- tracking section -->
  <section class="tracking_section layout_padding">
    <div class="container">
      <article class="card">
          <header class="card-header"> My Orders / Tracking </header>
          <div class="card-body">
              <h6>Order ID: OD45345345435</h6>
              <article class="card">
                  <div class="card-body row">
                      <div class="col"> <strong>Estimated Delivery time:</strong> <br>9 dec 2023 </div>
                      <div class="col"> <strong>Shipping BY:</strong> <br> BLUEDART | <i class="fa fa-phone"></i> +4478675986 </div>
                      <div class="col"> <strong>Status:</strong> <br> Placed </div>
                      <div class="col"> <strong>Tracking id#:</strong> <br> BD045903594059 </div>
                  </div>
              </article>
              <div class="track">
                  <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Order Placed</span> </div>
                  <div class="step active"> <span class="icon"> <i class="fa fa-user"></i> </span> <span class="text"> Order Confirmed</span> </div>
                  <div class="step"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span class="text"> On the way </span> </div>
                  <div class="step"> <span class="icon"> <i class="fa fa-thumbs-o-up"></i> </span> <span class="text">Delivered</span> </div>
              </div>
              <a href="#" class="btn btn-warning" data-abc="true"> <i class="fa fa-chevron-left"></i> Back to orders</a>
          </div>
      </article>
  </div>
  </section>

  <!-- end tracking section -->

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