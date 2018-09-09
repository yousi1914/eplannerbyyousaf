<?php
include 'conn.php';
$result = mysqli_query($con, "SELECT * FROM business");

    while($row = mysqli_fetch_array($result))
   		{

            echo "<tr>";
            echo "<td>" . $row['bname'] . "</td>";
            echo "<td>" . $row['bcity'] . "</td>";
          	echo "<td>" . $row['barea'] . "</td>";
            echo "<td>" . $row['blocation'] . "</td>";
            echo "<td>" . $row['bcontact'] . "</td>";
            echo "<td>" . $row['bookingFee'] . "</td>";
            echo "<td>" . $row['ownerId'] . "</td>";
            echo "<td>" . $row['openDays'] . "</td>";
            echo "<td>" . $row['bstatus'] . "</td>";
            echo "<td>" . $row['Paid'] . "</td>";
            echo "</tr>";
        }


?>
