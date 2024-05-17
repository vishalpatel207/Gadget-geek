<?php
$_servername="localhost";
$username="root";
$password="";
$dbname="register";

$conn = mysqli_connect($_servername,$username,$password,$dbname);

if($conn)
{
    // echo "connection ok";
}
else
{
    echo "connection failed" .mysqli_connect_error();

}
?>