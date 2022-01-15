<?php
    $conn = mysqli_connect('localhost','root','','bankapp')or die('Not connected' . mysqli_connect_error());
     $sql = "SELECT * FROM `customers`";
?>