<?php 
    $conn = mysqli_connect('localhost','id18279362_user','J>/15QridJ+~nu6]','id18279362_bankapp')or die('Not connected' . mysqli_connect_error());

    $from = $_POST['cust1'];
        $amount = $_POST['amount'];
        $to = $_POST['cust2'];
    
        $sql = "UPDATE customers SET CurrentBalance = CurrentBalance-$amount WHERE Name = '$from'";
        if ($conn->query($sql) === FALSE) {
          echo "Error updating record: " . $conn->error;
        }
    
        $sql2 = "UPDATE customers SET CurrentBalance = CurrentBalance+$amount WHERE Name = '$to' ";
        if ($conn->query($sql2) === FALSE) {
          echo "Error updating record: " . $conn->error;
        }
    
        $sql3 = "INSERT INTO transactions (DebitAccount,CreditAccount,Amount) VALUES('$from','$to','$amount')";
        if ($conn->query($sql3) === FALSE) {
          echo "Error updating record: " . $conn->error;
        }
    ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Transactions</title>
        <style>
        .table{
            justify-content:center;
            display:flex;
            font-size: 30px;
        }
        th,td{
            padding:10px;
        }
        </style>
    </head>
    <body>
        <div class="content">
            <nav>
                <div class="navbar-links">
                    <ul>
                        <li> <a href="./index.html"> Home</a></li>
                        <li><a href="./customers.php">View Customers</a></li>
                    </ul>
                </div>
            </nav>
            <div class="middle-portion2">
                <h1>Transactions</h1><br>
                <table class="table">
                    <tr>
                        <th>Debit Account</th>
                        <th>Credit Account</th>
                        <th>Amount Transferred</th>
                        
                    </tr>
                    <tr>
                        <td><?php echo "$from" ?></td>
                        <td><?php echo "$to" ?></td>
                        <td><?php echo "$amount" ?></td>
                        
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>