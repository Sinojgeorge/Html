<?php
$servername="localhost";
$username="root";
$password="";
$db_name="kappa";
$con=mysqli_connect($servername,$username,$password,$db_name);
if(!$con)
{
    die("failed".mysqli_connect_error());
}
?>