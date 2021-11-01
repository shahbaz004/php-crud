<?php
include 'conn.php';
if(isset($_POST['done'])){
extract($_POST);

$data = "INSERT INTO cred (FNAME, LNAME, EMAIL, PASSWD) VALUES ('$first_name', '$last_name', '$email', '$password')";

mysqli_query ($connection, $data);
header('location:login.php');

}

?>