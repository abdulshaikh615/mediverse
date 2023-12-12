<?php
session_start();

include("config/dbconnect.php");

if(isset($_POST["signup"])){
    $fullName = $_POST['fullName'];
    $storename = $_POST['storename'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $email = $_POST['signup_email'];
    $password = $_POST['signup_pwd'];
    $licenseno = $_POST['licenseno'];
    $contact = $_POST['contact'];


    // Validate user input
    echo empty($fullName) || empty($email) || empty($password) || 
        empty($licenseno) || empty($street) || empty($city) || empty($pincode);

    if (empty($fullName) || empty($email) || empty($password) || 
        empty($licenseno) || empty($street) || empty($city) || empty($pincode)) {
        echo "<script>alert('All input is required')</script>";
		// header("Refresh:0");
        return;
    }

    $result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
	if (mysqli_num_rows($result) > 0) {
		echo "<script>alert('User Already Exist. Please Login')</script>";
		header("Refresh:0");
		return;
    }

    // Insert new user into the database
    mysqli_query($conn, "INSERT INTO users (`fullName`, `storename`, `street`, `city`, `pincode`, `email`, 
                        `password`, `licenseno`, `contact`) 
              VALUES ('$fullName', '$storename', '$street', '$city', '$pincode', '$email', 
                      '$password', '$licenseno', '$contact')");
	echo "<script>alert('Registered Successfully. Please Login')</script>";
	header("Refresh:0");
}



if(isset($_POST["login"])){
    $email = $_POST['login_email'];
    $password = $_POST['login_pwd'];

    // Validate user input
    if (empty($email) || empty($password)) {
        echo "<script>alert('Email & Password is required')</script>";
		header("Refresh:0");
        return;
    }

    $result = mysqli_query($conn, "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'");
	if (mysqli_num_rows($result) > 0) {
		$fdetails = mysqli_fetch_array($result);

		$_SESSION["username"] = $fdetails["fullName"];
		$_SESSION["userId"] = $fdetails["userID"];
		$_SESSION["email"] = $fdetails["email"];
		header("Location:index.php");
		return;
    }else{
		echo "<script>alert('Invalid Credentials')</script>";
		header("Refresh:0");
        return;

	}
}
?>


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
include("header.php");?>
    <!-- end header section -->
  </div>


  <section class="about_section layout_padding">
    <div class="container">
      <div class="custom_heading-container ">
        <h2>
          Welcome to MEDI VERSE
        </h2>
      </div>
    </div>
</section>

  <!-- contact section -->
  <section class="contact_section">
    <div class="container layout_padding2">
      <div class="row">
        <div class="col-md-4">
        <div class="custom_heading-container form-group"><h2>Login</h2></div>

          <div class="form_contaier">
            <form action="" method="POST">
              <div class="form-group">
                <label for="exampleInputName1">Email Address</label>
                <input type="text" class="form-control" id="exampleInputName1" name="login_email">
              </div>
              <div class="form-group">
                <label for="exampleInputNumber1">Password</label>
                <input type="password" class="form-control" id="exampleInputNumber1" name="login_pwd">
              </div>
              <button type="submit" class="" name="login">Login</button>
            </form>
          </div>
        </div>
        <div class="col-md-8" style="border-left: 1px solid black">
        <div class="custom_heading-container form-group"><h2>Signup</h2></div>

        <div class="form_contaier">
            <form action="" method="POST">
             <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputName1">Owner Name</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="fullName">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputNumber1">Store Name</label>
                    <input type="text" class="form-control" id="exampleInputNumber1" name="storename">
                  </div>
                </div>
              </div>

              <div class="form-group">
                    <label for="exampleInputName1">Store Address</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="street">
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputName1">City</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="city">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputNumber1">Pincode</label>
                    <input type="text" class="form-control" id="exampleInputNumber1" name="pincode">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputName1">Pharmacy Registration No.</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="licenseno">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputNumber1">Telephone</label>
                    <input type="number" class="form-control" id="exampleInputNumber1" name="contact">
                  </div>
                </div>
              </div>

             <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputName1">Email Address</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="signup_email">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputNumber1">Password</label>
                    <input type="password" class="form-control" id="exampleInputNumber1" name="signup_pwd">
                  </div>
                </div>
              </div>

              
              <button type="submit" class="" name="signup" >Signup</button>
            </form>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

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