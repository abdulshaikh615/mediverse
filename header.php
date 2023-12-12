<?php
error_reporting(0);
?>
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
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <div class="top_contact-container">
          <div class="tel_container">
            <a href="">
              <img src="images/telephone-symbol-button.png" alt=""> Call : +44 7440361809
            </a>
          </div>
          <div class="social-container">
            <a href="">
              <img src="images/fb.png" alt="" class="s-1">
            </a>
            <a href="">
              <img src="images/twitter.png" alt="" class="s-2">
            </a>
            <a href="">
              <img src="images/instagram.png" alt="" class="s-3">
            </a>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="">
            <span>
              MEDI VERSE
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex  flex-column flex-lg-row align-items-center w-100 justify-content-between">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="buy.php"> Online Buy </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="news.php"> News </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact us</a>
                </li>
              </ul>
              <form class="form-inline " action="buy.php">
                <input type="search" placeholder="Search" name="search" value="<?=$_GET['search'];?>">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
              <div class="login_btn-contanier ml-0  ml-lg-5">
                <a href="cart.php">
                <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size:25px; margin-right: 15px" ></i>
                  <span>
                    Cart
                  </span>
                </a>
              </div>
              <div class="login_btn-contanier ml-0 ml-lg-5">
                <?php
                if(!empty($_SESSION["username"])){
                  ?>
                  
                  <a href="logout.php">
                  <span>
                    <?= $_SESSION["username"]; ?>
                  </span>
                  &nbsp;&nbsp;&nbsp;<i class="fa fa-power-off" aria-hidden="true"></i>

                </a>
                <?php
                }else{
                  ?>
                <a href="login.php">
                  <img src="images/user.png" alt="">
                  <span>
                    Login
                  </span>
                </a>
                <?php
                }?>

              </div>
              
            </div>
          </div>

        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    
    <!-- end slider section -->