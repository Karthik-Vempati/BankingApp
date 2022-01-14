<?php
$conn = mysqli_connect('localhost','root','','bankapp')or die('Not connecteds' . mysqli_connect_error());
                $sql = "SELECT * FROM `transactions`";
?>