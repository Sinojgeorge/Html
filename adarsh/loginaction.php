<?php
include './conn.php';
$email = $_POST['email'];
$password=$_POST['password'];
$sql="SELECT * FROM `login` WHERE `email`= '".$email."' AND `password`= '".$password."' ";
// echo $conn;
$result = $conn->query($sql);
if($result->num_rows>0)
{
    echo "login sucess";

}
else{
    echo " failed";
}
?>