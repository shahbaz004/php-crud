<?php
$connection = mysqli_connect('localhost', 'root', '', 'authentication');

if ($connection) {
    echo "Connection is Establish!";
}
else {
    echo "ERROR Connection Failed!";
}

?>