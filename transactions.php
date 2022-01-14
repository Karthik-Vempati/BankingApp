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
                overflow:scroll;
                overflow-x:hidden;
                max-height:50vh;
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
                    <?php include('config2.php');
                        $result = $conn->query($sql);
                        if($result->num_rows>0)
                        {
                            while($row = $result-> fetch_assoc())
                            {
                                echo "
                                <tr>
                                    <td name='Name'>".$row["DebitAccount"]."</td>
                                    <td>".$row["CreditAccount"]."</td>
                                    <td>".$row["Amount"]."</td>";?>
                                </tr>
                    <?php }} ?>
                </table>
            </div>
        </div>
    </body>
</html>