<?php

include 'conn.php';

$id = $_GET['id'];
$data = "DELETE FROM `cred` WHERE id = $id ";
mysqli_query($connection, $data);

header('location: table.php');

?>