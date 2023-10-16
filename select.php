<?php
require('condb.php');
    $uname = $_REQUEST['USERNAMES'];
    $sql = "SELECT firstname, lastname FROM employees 
    Where USERNAMES = '".$uname."'";
    $result = mysqli_query($conn, $sql); 
    $i=0;
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
       echo "Name: " . $row["First_name"]. " " . $row["Last_name"]. "<br>";
        }
       }
       else {
        echo "0 results";
        }
mysqli_close($conn);
?>