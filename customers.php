<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Customers</title>
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
                        <li><a href="./transactions.php">View Transactions</a></li>
                    </ul>
                </div>
            </nav>

            <div class="middle-portion2">
                <h1>Customers</h1><br>
                <p style="text-align:center; font-size:25px;">Select customer and proceed to transaction</p><br>
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Current Balance</th>
                        
                    </tr>
                    <form method="post" action="view.php">
                        <?php include('config.php');
                            $result = $conn->query($sql);
                            if($result->num_rows>0)
                            {
                                while($row = $result-> fetch_assoc())
                                {
                                    echo "
                                    <tr>
                                        <td name='Name'>".$row["Name"]."</td>
                                        <td>".$row["Email"]."</td>
                                        <td>".$row["CurrentBalance"]."</td>";
                        ?>
                                    </tr>
                        <?php }} ?>
                        <tr>
                            <td> <select name = "select" style="padding:10px;cursor:pointer;font-size:20px">
                        <?php 

$conn = mysqli_connect('localhost','root','','bankapp')or die('Not connected' . mysqli_connect_error());

                                        $sql = 'SELECT * FROM `customers`';
                                        $result = $conn->query($sql);
                                        if($result->num_rows>0)
                                        {
                                            while($row = $result-> fetch_assoc())
                                            {
                                                echo "<option>".$row["Name"]."</option>";
                                            }
                                        }
                                    ?>
                                    </select>
                            </td>
                            <td><input type="submit" style="padding:10px;background:rgb(4, 194, 45);font-size:20px;cursor:pointer;"></td>
                        </tr>
                    </form>
                </table>
            </div>
        </div>
    </body>
</html>