<?php
include 'conn.php';

if(isset($_POST['done'])){
extract($_POST);

if ($_POST) {
    header('location:table.php');
}
else {
    echo "Error while logging In";
}

mysqli_query ($connection, $_POST);
}

?>