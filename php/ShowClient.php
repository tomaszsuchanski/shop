<?php
global $conn;
include '../php/Config.php';

$sql = "SELECT client_id, address_id ,name, lastname FROM Client";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Address</th><th>Name</th><th>Last Name</th></tr>";


    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["client_id"]. "</td>";
        echo "<td>" . $row["address_id"]. "</td>";
        echo "<td>" . $row["name"]. "</td>";
        echo "<td>" . $row["lastname"]. "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);

