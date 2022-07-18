<?php 

    $conn = mysqli_connect('localhost', 'root', '', 'webtech');

    // if($conn){
    //     echo "Success";
    // }else{
    //     echo "DB Error...";
    // }

    $sql = "select * from test";
    $result = mysqli_query($conn, $sql);
    echo "<table border='1'>
    <tr>
        <th>Name</th>
        <th>Id</th>
        <th>Email</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
        echo "<tr>";
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td>" . $row['Id'] . "</td>";
            echo "<td>" . $row['Email'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";


   
?>