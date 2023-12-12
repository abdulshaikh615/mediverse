<?php

session_start();
include("config/dbconnect.php");

$maindb = "cart";
if(empty(isset($_SESSION['userId']))){
    echo 22;
    die;
}
$userId = $_SESSION['userId'];

if (isset($_GET['productId'])) {
    $productid = $_GET['productId'];
    $qty = $_GET['qty'];
    if(empty($qty)){
        $qty = 1;
    }

    
    $chkcart = mysqli_query($conn, "SELECT * FROM `cart` WHERE `userid`='$userId' 
                                        AND `productid`='$productid'")or die(mysqli_error($conn));
    if (mysqli_num_rows($chkcart) > 0) {
        $fcart = mysqli_fetch_assoc($chkcart);
        $qty = $qty + $fcart["qty"];
        mysqli_query($conn, "UPDATE `cart` SET `qty`='$qty' WHERE  `userid`='$userId' 
                            AND `productid`='$productid' ") or die(mysqli_error($conn));
    }else{
        mysqli_query($conn, "INSERT INTO `cart`(`userid`, `productid`, `qty`)
                                             VALUES('$userId','$productid', '$qty')") or die(mysqli_error($conn));
    

    }
    echo true;
}
echo false;
?>
    