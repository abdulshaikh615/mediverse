<?php
// Validate if user already exists
$conn = mysqli_connect("localhost", "root", "", "mediverse");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>