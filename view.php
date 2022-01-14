<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Transfer</title>
        <style>
            .table{
                justify-content:center;
                display:flex;
                font-size: 25px;
            }

            th,td{
                padding:10px;
            }
            #form-button{
                padding: 10px;
            }

        </style>
    </head>
    <body>
        <div class="content">
        <nav>
            <div class="navbar-links">
                <ul>
                    <li> <a href="./index.html"> Home</a></li>
                    <li><a href="./transactions.php">View Transactions</a></li>
                </ul>
            </div>
        </nav>
        <div class="middle-portion2">    
            <h1 class="new-h1" style="padding-bottom:50px">Enter Transaction Details</h1>
            <?php
            $name = $_POST['select'];
            ?>
            <table style="display:flex;justify-content:center;font-size:50px">
                <form action="view2.php" method="post">
                    <tr>
                        <td>
                            <label for="cust1" style="font-size:25px">From</label>
                            <input type="text" name="cust1" style='margin-left:2px;padding:5px;font-size:20px;border-radius:5px' value="<?php echo "$name" ?>"></input>
                        </td>
                        <td>
                            <label for="amount"  style="font-size:25px">Enter Amount</label>
                            <input type="number" name="amount" style='margin-left:2px;padding:5px;font-size:20px;border-radius:5px'>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="cust2"  style="font-size:25px">Select Customer to transfer</label>
                        </td>
                        <td>
                            <select name="cust2"  style='margin-left:2px;padding:5px;font-size:20px;border-radius:5px'>
                            <?php include('config.php');
                                $result = $conn->query($sql);
                                if($result->num_rows>0)
                                {
                                    while($row = $result-> fetch_assoc())
                                    {
                                        echo 
                                        "
                                        <option>".$row['Name']."</option>
                                        ";
                                    }
                                }   
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr style="display:flex;justify-content:center;align-items:center;">
                        <td >
                            <input type="submit" value="Transfer" style="padding:10px;background:rgb(4, 194, 45);font-size:20px;cursor:pointer">
                        </td>
                    </tr>
                </form>
            </table>
        </div>
    </div>
    </body>
</html>