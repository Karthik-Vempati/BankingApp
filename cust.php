<?php
                $conn = mysqli_connect("localhost","root","","bankapp");
                $sql = "SELECT * FROM `customers`";

                if($result->num_rows>0)
                {
                    while($row = $result-> fetch_assoc())
                    {
                        echo "<tr><td>".row["Name"]."</td><td>".row["Email"]."</td></tr>";
                    }
                }
            ?>