<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
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
        <h1>Customers</h1>
        <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Current Balance</th>
        </tr>
        <?php include 'cust.php';?>
    </table>
    </div>
</div>
</body>
</html>