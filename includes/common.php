<?php
$con=mysqli_connect("localhost","root","password","ecommerce");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
