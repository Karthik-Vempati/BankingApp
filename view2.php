<?php 
    $conn = mysqli_connect('localhost','root','','bankapp')or die('Not connected' . mysqli_connect_error());

    $from = $_POST['cust1'];
    $amount = $_POST['amount'];
    $to = $_POST['cust2'];

    $sql = "UPDATE customers SET CurrentBalance = CurrentBalance-$amount WHERE Name = '$from'";
    if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
    } 
    else {
      echo "Error updating record: " . $conn->error;
    }

    $sql2 = "UPDATE customers SET CurrentBalance = CurrentBalance+$amount WHERE Name = '$to' ";
    if ($conn->query($sql2) === TRUE) {
      echo "Record updated successfully";
    }
    else {
      echo "Error updating record: " . $conn->error;
    }

    $sql3 = "INSERT INTO transactions (DebitAccount,CreditAccount,Amount) VALUES('$from','$to','$amount')";
    if ($conn->query($sql3) === TRUE) {
      echo "Record updated successfully";
    }
    else {
      echo "Error updating record: " . $conn->error;
    }
?>